@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

<div class="container mt-0 mb-5">
    <a href="{{ route('hotel.create') }}" class="btn btn-primary">Create</a>
    <a href="{{ route('hotel.trash') }}" class="btn btn-warning">Trash</a>
    <h2 class="text-center mb-4 mt-0">Hotel List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>SI</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Address</th>
                    <th>Single</th>
                    <th>Double</th>
                    <th>Single Room</th>
                    <th>Double Room</th>
                    <th>Image</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $start = $hotels->currentPage() * $hotels->perPage() - $hotels->perPage() + 1;
            @endphp

                @foreach($hotels as $key => $hotel)
                <tr>
                    {{-- <th scope="row">{{ $key + 1 }}</th> --}}
                    <th scope="row">{{ $start + $key }}</th>
                    <td>HT-{{ $hotel->id }}</td>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->type }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>BDT {{ $hotel->singlebedprice }}</td>
                    <td>BDT {{ $hotel->doublebedprice }}</td>
                    <td> {{ $hotel->singlebedseat }}</td>
                    <td> {{ $hotel->doublebedseat }}</td>
                    <td>
                        @if($hotel->image)
                            <img src="{{ asset($hotel->image) }}" style="width: 70px; height: 70px; border: 1px solid #000; border-radius: 50%;" alt="img"/>
                        @else
                            <img src="{{ asset('path_to_default_image_icon') }}" style="width: 70px; height: 70px; border: 1px solid #000; border-radius: 50%;" alt="img_icon"/>
                        @endif
                    </td>

                    <td>{{ $hotel->number }}</td>

                    <td>
                        <a href="{{ route('hotel.delete', $hotel->id) }}" class="btn btn-warning">
                            <span style="font-size: 0.9rem;"><i class="fas fa-trash"></i></span>

                        </a>
                        <a href="{{ route('hotel.edit', $hotel->id) }}" class="btn btn-warning">
                            <span style="font-size: 0.7rem;"><i class="fas fa-edit"></i></span>

                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
    </table>


        {{ $hotels->links() }}


    </div>
</div>



</body>
</html>
@endsection

