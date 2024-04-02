


{{-- @extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

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
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Package List</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Pick</th>
                    <th>Return</th>
                    <th>Duration</th>
                    <th>Price/person</th>
                    <th> Hotel Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages as $package)
                <tr>
                    <td>{{ $package->id }}</td>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->pickupdate }}</td>
                    <td>{{ $package->returndate }}</td>
                    <td>{{ $package->duration }}</td>
                    <td>{{ $package->price }}.00 BDT</td>
                    <td>{{ optional($package->hotels)->id }}. {{ optional($package->hotels)->name }}</td>
                    <td>{{optional ($package->hotels)->address }}</td>
                </tr>
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
 --}}

 @extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <style>

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
    <h2 class="text-center mb-4">Package List</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Pick</th>
                    <th>Return</th>
                    <th>Duration</th>
                    <th>Price/person</th>
                    <th>Hotel Name</th>
                    <th>Address</th>
                    <th>Transport Name</th>
                    {{-- <th>Image</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages as $package)
                <tr>
                    <td>{{ $package->id }}</td>
                    <td>{{ $package->name }}</td>
                    <td>{{ date('d M, Y \a\t g:i A', strtotime($package->pickupdate)) }}</td>
                    <td>{{ date('d M, Y \a\t g:i A', strtotime($package->returndate)) }}</td>
                    <td>{{ $package->duration }}</td>
                    <td>{{ $package->price }}.00 BDT</td>
                    <td>{{ optional($package->hotels)->id }}. {{ optional($package->hotels)->name }} </td>
                    <td>{{ optional($package->hotels)->address }} </td>
                    <td>{{ optional($package->transports)->id }}. {{ optional($package->transports)->name }}
                    </td>
                    {{-- <td>
                        <img style="border-radius: 15%" width="70px" src="{{ url('/uploads/' . $package->image) }}" alt="">
                    </td> --}}
                    {{-- <td>
                        <img style="border-radius: 15%" width="70px" src="{{ asset('uploads/' . $package->image) }}" alt="">
                    </td> --}}
<td>

<a href="{{route('package.delete',$package->id)}}"class="btn btn-danger">Trash</a>
<a href="{{route('package.edit',$package->id)}}"class="btn btn-warning">Edit</a>

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


