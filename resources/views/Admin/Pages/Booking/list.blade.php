@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Hotel List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>SI</th>
                    {{-- <th>Code</th> --}}
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    {{-- <th>Image</th> --}}
                    <th>Person</th>
                    <th>Amount</th>
                    <th>Room</th>

                </tr>
            </thead>
            <tbody>

                @foreach($bookings as $key => $booking)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    {{-- <td>{{ $hotel->id }}</td> --}}
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->address }}</td>
                    {{-- <td> <img src="{{asset($booking->image)}}" alt="img"></td> --}}
                    <td>{{ $booking->quantity }}</td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->chooseroom }}</td>



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


