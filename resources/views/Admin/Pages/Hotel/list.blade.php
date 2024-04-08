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

<div class="container mt-5">
    <h2 class="text-center mb-4">Hotel List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>SI</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Address</th>
                    <th>Single(BDT)</th>
                    <th>Double(BDT)</th>
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
                    {{-- <td>{{ $transports->image }}</td> --}}
                    <td>BDT {{ $hotel->singlebedprice }}</td>
                    <td>BDT {{ $hotel->doublebedprice }}</td>
                    <td>{{ $hotel->number }}</td>

                    <td>
                        <a href="{{ route('hotel.delete', $hotel->id) }}" class="btn btn-warning">
                            <span style="font-size: 0.9rem;"><i class="fas fa-trash"></i></span>

                        </a>
                        <a href="{{ route('hotel.edit', $hotel->id) }}" class="btn btn-warning">
                            <span style="font-size: 0.9rem;"><i class="fas fa-edit"></i></span>

                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
    </table>


        {{ $hotels->links() }}


    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection

