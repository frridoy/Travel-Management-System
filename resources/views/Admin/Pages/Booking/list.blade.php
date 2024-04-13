{{-- @extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>

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
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Person</th>
                    <th>Amount</th>
                    <th>Room</th>

                </tr>
            </thead>
            <tbody>

                @foreach($bookings as $key => $booking)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->address }}</td>
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

 --}}


 @extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-0">
    <h2 class="text-center mb-4">Booking List</h2>

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
                    <th>Person</th>
                    <th>Amount</th>
                    <th>Room</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalAmount = 0; ?>
                @foreach($bookings as $key => $booking)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->address }}</td>
                    <td>{{ $booking->quantity }}</td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->chooseroom }}</td>
                </tr>
                <?php $totalAmount += $booking->amount; ?>
                @endforeach
                <tr>
                    <td colspan="6" class="text-right"><strong>Total Amount:</strong></td>
                    <td colspan="2">{{ $totalAmount }}</td>
                </tr>
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
