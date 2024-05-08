@extends('admin.master')
@section('content')
    {{-- <a href="{{ route('user_role.create') }}" class="btn btn-primary mb-4 mt-4 "> Create User Role</a> --}}

    <table class="table text-center align-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col">Email</th>
                {{-- <th scope="col">Password</th> --}}
                <th scope="col">Image</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                @php
                    $start= $users->currentPage() * $users -> perPage() - $users -> perPage() +1
                @endphp
                @foreach ($users as $key => $user)
                    <th scope="row">{{$key + $start}}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>{{ $user->password }}</td> --}}
                    <td>
                        <img style="border-radius: 15%" width="70px"  src="{{ url('/uploads//' . $user->image) }}" alt="">
                    </td>
                   </tr>
@endforeach
        </tbody>
    </table>


        {{ $users->links() }}

@endsection
