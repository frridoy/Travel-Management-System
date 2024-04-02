@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport List</title>
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
    <h2 class="text-center mb-4">Transport List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th> Bus Name</th>
                    <th>Type</th>
                    {{-- <th>Image</th> --}}
                    <th>Price (BDT)</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transports as $transport)
                <tr>
                    <td>{{ $transport->id }}</td>
                    <td>{{ $transport->name }}</td>
                    <td>{{ $transport->type }}</td>
                    {{-- <td>{{ $transports->image }}</td> --}}
                    <td>BDT {{ $transport->price }}</td>
                    <td>{{ $transport->number }}</td>

                    <td>
                        <a href="{{ route('transport.delete', $transport->id) }}" class="btn btn-warning">
                            <span style="font-size: 0.9rem;"><i class="fas fa-trash"></i></span>

                        </a>
                        <a href="{{ route('transport.edit', $transport->id) }}" class="btn btn-warning">
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

