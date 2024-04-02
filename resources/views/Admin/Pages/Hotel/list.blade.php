@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <style>
        /* Additional CSS styles */
        .container {
            max-width: 800px;
        }
        .table-responsive {
            overflow-x: auto;
        }
        th, td {
            text-align: center;
            vertical-align: middle;
        }

    </style> --}}
</head>
<body>

    <a class="btn btn-danger" href="{{route('hotel.trash')}}"> Trash List</a>
<div class="container mt-5">
    <h2 class="text-center mb-4">Hotel List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Room Type</th>
                    <th>Address</th>
                    <th>Price (BDT)</th>
                    <th>Contact Number</th>
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
                    <td>BDT {{ $hotel->price }}</td>
                    <td>{{ $hotel->number }}</td>
                    {{-- <td>
                        <a href="{{route('hotel.delete', $hotel->id)}}" class="btn btn-warning"><i class="fas fa-trash"></i> </a>
                        <a href="{{route('hotel.edit', $hotel->id)}}" class="btn btn-info"><i class="fas fa-edit"></i> </a>

                    </td> --}}
                    <td>
                        <a href="{{ route('hotel.delete', $hotel->id) }}" class="btn btn-warning">
                            <span style="font-size: 0.9rem;"><i class="fas fa-trash"></i></span>

                        </a>
                        <a href="{{ route('hotel.edit', $hotel->id) }}" class="btn btn-info">

                            <span style="font-size: 0.9rem;"><i class="fas fa-edit"></i></span>
                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
