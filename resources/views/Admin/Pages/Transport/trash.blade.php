@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport trash List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-0">
    <a href="{{ route('transport.create') }}" class="btn btn-primary">Info</a>

    <h2 class="text-center mb-4">Transport Trash List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Bus Name</th>
                    <th>Type</th>
                    <th>Destination</th>
                    <th>Image</th>
                    <th>Price (BDT)</th>
                    <th>Contact Number</th>
                    <th>No Of Vehicles</th>
                    <th>No of Seats</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transports as $transport)
                <tr>
                    <td>{{ $transport->id }}</td>
                    <td>{{ $transport->name }}</td>
                    <td>{{ $transport->type }}</td>
                    <td>
                        @if ($transport->destinations)
                        {{ optional($transport->destinations)->id }}. {{ optional($transport->destinations)->name }}
                    @else
                        Not Found
                    @endif
                </td>
                    <td>
                        @if($transport->image)
                            <img src="{{ asset($transport->image) }}" style="width: 70px; height: 70px; border: 1px solid #000; border-radius: 50%;" alt="img"/>
                        @else
                            <img src="{{ asset('path_to_default_image_icon') }}" style="width: 70px; height: 70px; border: 1px solid #000; border-radius: 50%;" alt="img_icon"/>
                        @endif
                    </td>
                    <td>BDT {{ $transport->price }}</td>
                    <td>{{ $transport->number }}</td>
                    <td>{{ $transport->totalvehicles }}</td>
                    <td>{{ $transport->totalseat }}</td>

                    <td>
                        <a href="{{ route('transport.restore', $transport->id) }}" class="btn btn-success">
                            <span style="font-size: 0.9rem;"><i class="fas fa-undo"></i></span>

                        </a>
                        <a href="{{ route('transport.forceDelete', $transport->id) }}" class="btn btn-danger">
                            <span style="font-size: 0.9rem;"><i class="fas  fa-trash-alt"></i></span>

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

