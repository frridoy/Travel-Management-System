@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

<div class="container mt-0">
    <a href="{{ route('hotel.list') }}" class="btn btn-primary">Hotel Info</a>

    <h2 class="text-center mb-4">Hotel  Trash List</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Address</th>
                    <th>Single</th>
                    <th>Double </th>
                    <th>Single Room</th>
                    <th>Double Room </th>
                    <th>Contact</th>
                    <th> Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->type }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>BDT {{ $hotel->singlebedprice }}</td>
                    <td>BDT {{ $hotel->doublebedprice }}</td>
                    <td> {{ $hotel->singlebedseat }}</td>
                    <td> {{ $hotel->doublebedseat }}</td>
                    <td>{{ $hotel->number }}</td>
                    <td>
                        @if($hotel->image)
                            <img src="{{ asset($hotel->image) }}" style="width: 70px; height: 70px; border: 1px solid #000; border-radius: 50%;" alt="img"/>
                        @else
                            <img src="{{ asset('path_to_default_image_icon') }}" style="width: 70px; height: 70px; border: 1px solid #000; border-radius: 50%;" alt="img_icon"/>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('hotel.restore',$hotel->id)}}" class="btn btn-success"> <span><i class="fas fa-undo"></i></span></a>
                        <a href="{{route('hotel.forceDelete',$hotel->id)}}" class="btn btn-danger"> <span><i class="fas fa-trash-alt"></i></span> </a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
@endsection
