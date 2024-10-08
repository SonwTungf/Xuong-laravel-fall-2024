@extends('client.layouts.master')

@section('title')
    Danh Sách Khách hàng
@endsection

@section('content')
    <h1 style="padding-top: 100px">Danh Sách Khách hàng</h1>
    <a class="btn btn-info" href="{{ route('customers.create') }}">create</a>

    @if (session()->has('success') && !session()->get('success'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    @if (session()->has('success') && session()->get('success'))
        <div class="alert alert-info">
            Thao tác thành công
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">address</th>
                    <th scope="col">avatar</th>
                    <th scope="col">phone</th>
                    <th scope="col">email</th>
                    <th scope="col">is active</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_at</th>
                    <th scope="col">action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $customer)
                    <tr>
                        <td scope="row">{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>
                            @if ($customer->avatar)
                                <img src="{{ Storage::url($customer->avatar) }}" width="120px">
                            @endif
                        </td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>
                            @if ($customer->is_active)
                                <span class="badge1 bg-primary">YES</span>
                            @else
                                <span class="badge1 bg-danger">NO</span>
                            @endif
                        </td>
                        <td>{{ $customer->created_at }}</td>
                        <td>{{ $customer->updated_at }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('customers.show', $customer) }}">Show</a>
                            <a class="btn btn-warning" href="{{ route('customers.edit', $customer) }}">Edit</a>
                            <form action="{{ route('customers.destroy', $customer) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" onclick="return confirm('Bạn Có Chắc CHắn muốn xóa không ?') "
                                    class="btn btn-danger">
                                    Xóa Mềm
                                </button>
                            </form>

                            <form action="{{ route('customers.forceDestroy', $customer) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" onclick="return confirm('Bạn Có Chắc CHắn muốn xóa không ?') "
                                    class="btn btn-dark">
                                    Xóa cứng
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="display: flex; justify-content: center;">
            {{ $data->links() }}
        </div>


    </div>
@endsection
