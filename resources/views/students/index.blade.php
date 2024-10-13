@extends('master-2')

@section('title')
    Danh sách sinh viên
@endsection

@section('content')
    <h1>Danh sách sinh viên
        <a class="btn btn-primary" href="{{ route('students.create') }}">Thêm Mới</a>
    </h1>

    {{-- @if (session()->has('success') && !session()->get('success'))
        <div class="alert alert-info">
            {{ session()->get('error') }}
        </div>
    @endif

    @if (session()->has('success') && session()->get('success'))
        <div class="alert alert-info">
            Thao tác thành công
        </div>
    @endif --}}

    <div class="container">
        <form action="{{ route('students.index') }}" method="GET">


            <div class="mb-3 row">
                <label for="search" class="col-4 col-form-label">Tìm kiếm sinh viên</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="search" id="search" />
                </div>
            </div>

            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>


    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CLASS</th>
                    <th scope="col">CREATED_AT</th>
                    <th scope="col">UPDATED_AT</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $student)
                    <tr class="">
                        <td scope="row">{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->classroom->name }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>{{ $student->updated_at }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                            <a class="btn btn-warning" href="{{ route('students.edit', $student->id) }}">Edit</a>

                            <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button type="submit" onclick="return confirm('Có chắc chắn xoá không?')"
                                    class="btn btn-danger">Xoá</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $data->Links() }}
    </div>
@endsection
