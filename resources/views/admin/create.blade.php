@extends('client.layouts.master')

@section('title')
    Thêm mới Khách hàng
@endsection

@section('content')
    <h1 style="padding-top: 100px">Thêm mới khách hàng </h1>

    @if (session()->has('success') && !session()->get('success'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <form method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name"
                        value="{{ old('name') }}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="address" class="col-4 col-form-label">address</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="address" id="address"
                        placeholder="address"value="{{ old('address') }}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="phone" class="col-4 col-form-label">phone</label>
                <div class="col-8">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="phone"
                        value="{{ old('phone') }}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">email</label>
                <div class="col-8">
                    <input type="email" class="form-control" name="email" id="email" placeholder="email"
                        value="{{ old('email') }}" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="is_active" class="col-4 col-form-label">is active</label>
                <div class="col-8">
                    <input type="checkbox" class="form-checkbox" value="1" name="is_active" id="is_active" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="avatar" class="col-4 col-form-label">avatar</label>
                <div class="col-8">
                    <input type="file" class="form-control" name="avatar" id="avatar" placeholder="avatar" />
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        submit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
