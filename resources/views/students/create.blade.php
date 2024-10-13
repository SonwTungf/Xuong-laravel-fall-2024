@extends('master-2')

@section('title')
    Thêm mới sinh viên
@endsection

@section('content')
    <h1>Thêm mới sinh viên</h1>

    <div class="container">
        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="mb-3 row">
                <label for="name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" />
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" />
                </div>
            </div>

            <div class="mb-3 row">
                <label for="classroom_id" class="col-4 col-form-label">Class</label>
                <div class="col-8">
                    <select name="classroom_id" id="classroom_id" class="form-select">
                        <option value="">Chọn lớp học</option>
                        @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="passport_number" class="col-4 col-form-label">Passport Number</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="passport_number" id="passport_number"
                        value="{{ old('passport_number') }}" />
                </div>
            </div>

            <div class="mb-3 row">
                <label for="issued_date" class="col-4 col-form-label">Issue Date</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="issued_date" id="issued_date"
                        value="{{ old('issued_date') }}" />
                </div>
            </div>

            <div class="mb-3 row">
                <label for="expiry_date" class="col-4 col-form-label">Expiry Date</label>
                <div class="col-8">
                    <input type="date" class="form-control" name="expiry_date" id="expiry_date"
                        value="{{ old('expiry_date') }}" />
                </div>
            </div>

            <div class="mb-3 row">
                <label for="subjects" class="col-4 col-form-label">Subject</label>
                <div class="col-8">
                    <select name="subjects[]" id="subjects" class="form-select">
                        <option value="">Chọn môn học</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
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
        <a href="{{ route('students.index') }}" class="btn btn-primary">Quay lại danh sách</a>
    </div>
@endsection
