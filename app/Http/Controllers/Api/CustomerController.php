<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $term = request(key: 'term', default: null);

        $data = Customer::latest('id')
            ->when($term, function ($querry, $term) {
                $querry->whereAny([
                    'name',
                    'email',
                    'phone',
                    'address'
                ],  'LIKE',  "%$term%");
            })
            ->paginate(5);

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'avatar' => 'nullable|image|max:2048',
            'phone' => [
                'required',
                'string',
                'max:20',
                Rule::unique('customers')
            ],
            'email' => 'required|email|max:100',
            'is_active' => ['nullable', Rule::in([0, 1])],
        ]);

        try {
            if ($request->hasFile('avatar')) {
                $data['avatar'] = Storage::put('customers', $request->file('avatar'));
            }

            $Customer = Customer::query()->create($data);

            return response()->json($Customer, 201);
        } catch (\Throwable $th) {

            if (!empty($data['avatar']) && Storage::exists($data['avatar'])) {
                Storage::delete($data['avatar']);
            }
            return response()->json([
                'Loi~ he. thong'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, string $id)
    {


        $data = $request->all();

        $customer = customer::find($id);

        try {

            $data['is_active'] = isset($data['is_active']) ? $data['is_active'] : 0;

            if ($request->hasFile('avatar')) {
                $data['avatar'] = Storage::put('customers', $request->files('avatar'));
            }

            $curentAvatar = $customer->avatar;
            $customer->update($data);

            if (
                $request->hasFile('avatar')
                && !empty($curentAvatar)
                && Storage::exists($curentAvatar)
            ) {
                Storage::delete($curentAvatar);
            }

            return response()->json([
                'Loi~ he. thong'
            ], 500);;
        } catch (\Throwable $th) {

            if (!empty($data['avatar']) && Storage::exists($data['avatar'])) {
                Storage::delete($data['avatar']);
            }

            return response()->json([
                'Loi~ he. thong'
            ], 500);;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
