

@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Trash List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-0">
    <a href="{{ route('package.list') }}" class="btn btn-primary">Package Info</a>
    <h2 class="text-center mb-4">Package Pause List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Pick</th>
                    <th>Return</th>
                    <th>Duration</th>
                    <th>Price/p</th>
                    <th>Hotel</th>
                    <th>Transport</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages as $package)
                <tr>
                    <td>{{ $package->id }}</td>
                    <td> {{ $package->startingpoint }} ⬌ {{ $package->destination }}</td>
                    <td>{{ date('d M,Y \a\t g:iA', strtotime($package->pickupdate)) }}</td>
                    <td>{{ date('d M,Y \a\t g:iA', strtotime($package->returndate)) }}</td>
                    <td>{{ $package->duration }}</td>
                    <td>{{ $package->price }}.00 BDT</td>
                    <td>{{ optional($package->hotels)->id }}. {{ optional($package->hotels)->name }} </td>

                    <td>{{ optional($package->transports)->id }}. {{ optional($package->transports)->name }}
                    </td>

                    <td>
                        @if($package->image)
                            <img src="{{ asset($package->image) }}" style="width: 70px; height: 70px; border: 1px solid #000; border-radius: 25%;" alt="img"/>
                        @else
                            <img src="{{ asset('path_to_default_image_icon') }}" style="width: 70px; height: 70px; border: 1px solid #000; border-radius: 50%;" alt="img_icon"/>
                        @endif
                    </td>

<td>

    <a href="{{ route('package.restore', $package->id) }}" class="btn btn-success">
        <span style="font-size: 0.9rem;"><i class="fas fa-undo"></i></span>

    </a>

    <a href="{{ route('package.forceDelete', $package->id) }}" class="btn btn-danger">
        <span style="font-size: 0.9rem;"><i class="fas fa-trash-alt"></i></span>

    </a>

</td>
        @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection


