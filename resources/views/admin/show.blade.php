@extends('client.layouts.master')

@section('title')
    chi tiet Khách hàng : {{ $customer->name }}
@endsection

@section('content')
    <h1 style="padding-top: 100px">chi tiet Khách hàng : {{ $customer->name }}</h1>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Ten Truong</th>
                    <th scope="col">Gia tri</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->toArray() as $key => $value)
                    <tr class="">
                        <td scope="row">{{ strtoupper($key) }}</td>
                        <td>
                            @php
                                switch ($key) {
                                    case 'avatar':
                                        if ($value) {
                                            $url = Storage::url($value);
                                            echo " <img src='$url'width='120px'>";
                                        }
                                        break;

                                    case 'is_active':
                                        echo $value
                                            ? '<span class="badge1 bg-primary">YES</span>'
                                            : '<span class="badge1 bg-danger">NO</span>';
                                        break;

                                    default:
                                        echo $value;
                                        break;
                                }
                            @endphp
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
