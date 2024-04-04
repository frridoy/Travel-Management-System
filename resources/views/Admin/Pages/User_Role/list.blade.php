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
                <th scope="col">Action</th>
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
                    <td>
                        {{-- <a href="{{route('package.view',$package->id)}}"class="btn btn-primary">View</a>
                        <a href="{{route('package.edit',$package->id)}}"class="btn btn-warning">Edit</a>
                        <a href="{{route('package.delete',$package->id)}}"class="btn btn-danger">Delete</a> --}}
                        <a href=""class="btn btn-danger">View</a>
                    </td>
                   </tr>
@endforeach
        </tbody>
    </table>


        {{ $users->links() }}
  
@endsection
