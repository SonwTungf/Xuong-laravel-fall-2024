<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Passport;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        $data = Student::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%");
        })->with('classroom')->latest('id')->paginate(10);

        return view('students.index', compact('data'));
    }

    public function search(Request $request)
    {
        $students = Student::query()
            ->where('name', 'LIKE', "%{$request->search}%")
            ->orWhereHas('classroom', function ($query) use ($request) {
                $query->where('name', 'LIKE', "%{$request->search}%");
            })
            ->paginate(10);

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classrooms = Classroom::all();
        $subjects   = Subject::all();
        return view('students.create', compact('classrooms', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students,email',
            'classroom_id' => 'required|exists:classrooms,id',
            'passport_number' => 'required|string|max:255',
            'issued_date' => 'required|date',
            'expiry_date' => 'required|date',
            'subjects' => 'array',
            'subjects.*' => 'exists:subjects,id'
        ]);

        $student = Student::create($request->only('name', 'email', 'classroom_id'));

        if ($request->has('subjects') && count($request->subjects) > 0) {
            $student->subjects()->attach($request->subjects);
        }

        Passport::create([
            'student_id' => $student->id,
            'passport_number' => $request->passport_number,
            'issued_date' => $request->issued_date,
            'expiry_date' => $request->expiry_date,
        ]);

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::with('passport', 'classroom', 'subjects')->findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::with('passport', 'classroom', 'subjects')->findOrFail($id);
        $classrooms = Classroom::all();
        $subjects = Subject::all();
        return view('students.edit', compact('student', 'classrooms', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students,email,' . $id,
            'classroom_id' => 'required|exists:classrooms,id',
            'passport_number' => 'required|string|max:255',
            'issued_date' => 'required|date',
            'expiry_date' => 'required|date',
            'subjects' => 'array',
            'subjects.*' => 'exists:subjects,id'
        ]);

        $student = Student::findOrFail($id);

        $student->update($request->only('name', 'email', 'classroom_id'));

        if ($request->has('subjects') && count($request->subjects) > 0) {
            $student->subjects()->sync($request->subjects);
        }

        if ($student->passport) {
            $student->passport->update($request->only('passport_number', 'issued_date', 'expiry_date'));
        } else {
            Passport::create([
                'student_id' => $student->id,
                'passport_number' => $request->passport_number,
                'issued_date' => $request->issued_date,
                'expiry_date' => $request->expiry_date,
            ]);
        }

        return redirect()->route('students.index')->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
