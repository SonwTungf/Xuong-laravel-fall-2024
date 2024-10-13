@extends('master-2')

@section('title')
    Xem chi tiết sinh viên: {{ $student->name }}
@endsection

@section('content')
    <h1>Xem chi tiết sinh viên: {{ $student->name }}</h1>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <td>{{ $student->email }}</td>
                </tr>
                <tr>
                    <th scope="col">Class</th>
                    <td>{{ $student->classroom->name }}</td>
                </tr>
                <tr>
                    <th scope="col">Passport Number</th>
                    <td>{{ $student->passport->passport_number }}</td>
                </tr>
                <tr>
                    <th scope="col">Issue Date</th>
                    <td>{{ $student->passport->issued_date }}</td>
                </tr>
                <tr>
                    <th scope="col">Expiry Date</th>
                    <td>{{ $student->passport->expiry_date }}</td>
                </tr>
            </thead>
        </table>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Subject</th>
                        <th scope="col">Credits</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student->subjects as $subject)
                        <tr>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->credits }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <a href="{{ route('students.index') }}" class="btn btn-primary">Quay lại danh sách</a>
    </div>
@endsection
