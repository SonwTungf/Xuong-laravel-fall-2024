{{-- @extends('master') --}}

@section('content')
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td></td>
                @endforeach
            </tbody>
        </table>

        <div style="display: flex; justify-content: center;">
            {{ $data->links() }}
        </div>


    </div>
@endsection
