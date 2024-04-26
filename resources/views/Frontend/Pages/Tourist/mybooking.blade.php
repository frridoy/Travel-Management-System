{{--
@extends('Frontend.master')
@section('content')
 <br> <br> <br> <br> <br> <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Booking List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Tran-ID</th>
                    <th>Pickupdate</th>

                </tr>
            </thead>
            <tbody>
               @foreach ($bookings as $key => $booking )
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->quantity }}</td>
                    <td>
                        @if($booking->chooseroom === "Single Bed for 2 persons in a room")
                            Single Bed
                        @elseif($booking->chooseroom === "Double Bed for 4 persons in a room")
                            Double Bed
                        @endif
                    </td>
                    <td>
                        @if($booking->payment_status === "Pending")
                            <span class="text-danger">Pending</span>
                        @elseif($booking->payment_status === "confirm")
                            <span class="text-success">Confirm</span>
                        @endif
                    </td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->transaction_id}}</td>
                    <td>{{ $booking->pickupdate}}</td>

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
@endsection --}}
{{--
@extends('Frontend.master')
@section('content')
<br> <br> <br> <br> <br> <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Booking List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Tran-ID</th>
                    <th>Pickupdate</th>
                    <th>Action</th> <!-- Added Action column -->
                </tr>
            </thead>
            <tbody>
               @foreach ($bookings as $key => $booking )
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->quantity }}</td>
                    <td>
                        @if($booking->chooseroom === "Single Bed for 2 persons in a room")
                            Single Bed
                        @elseif($booking->chooseroom === "Double Bed for 4 persons in a room")
                            Double Bed
                        @endif
                    </td>
                    <td>
                        @if($booking->payment_status === "Pending")
                            <span class="text-danger">Pending</span>
                        @elseif($booking->payment_status === "confirm")
                            <span class="text-success">Confirm</span>
                        @endif
                    </td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->transaction_id}}</td>
                    <td>{{ $booking->pickupdate}}</td>
                    <td>
                        @php
                            $pickupdate = strtotime($booking->pickupdate); // Convert pickupdate to UNIX timestamp
                            $currentDateTime = strtotime(now()); // Get current date and time in UNIX timestamp
                            $difference = $pickupdate - $currentDateTime; // Calculate difference in seconds
                            $hoursDifference = $difference / (60 * 60); // Convert difference to hours

                            // Show cancel button if more than 24 hours remaining until pickupdate
                            if($hoursDifference > 24)
                            {
                                // echo '<button class="btn btn-danger">Cancel</button>';
                                echo '<button class="btn btn-danger"><i class="fas fa-times"></i></button>';
                            }
                        @endphp
                    </td>
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
@endsection --}}

{{--
@extends('Frontend.master')
@section('content')
<br> <br> <br> <br> <br> <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Booking List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Tran-ID</th>
                    <th>Pickupdate</th>
                    <th>Action</th> <!-- Added Action column -->
                </tr>
            </thead>
            <tbody>
               @foreach ($bookings as $key => $booking )
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->quantity }}</td>
                    <td>
                        @if($booking->chooseroom === "Single Bed for 2 persons in a room")
                            Single Bed
                        @elseif($booking->chooseroom === "Double Bed for 4 persons in a room")
                            Double Bed
                        @endif
                    </td>
                    <td>
                        @if($booking->payment_status === "Pending")
                            <span class="text-danger">Pending</span>
                        @elseif($booking->payment_status === "confirm")
                            <span class="text-success">Confirm</span>
                        @endif
                    </td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->transaction_id}}</td>
                    <td>{{ $booking->pickupdate}}</td>
                    <td>
                        @php
                            $pickupdate = strtotime($booking->pickupdate); // Convert pickupdate to UNIX timestamp
                            $currentDateTime = strtotime(now()); // Get current date and time in UNIX timestamp
                            $difference = $pickupdate - $currentDateTime; // Calculate difference in seconds
                            $hoursDifference = $difference / (60 * 60); // Convert difference to hours

                            // Show cancel button if more than 24 hours remaining until pickupdate
                            if($hoursDifference > 24)
                            {
                                echo '<form method="POST" action="' . route('cancel.booking', $booking->id) . '">';
                                echo '<button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>';
                                echo '@csrf';
                                echo '</form>';
                            }
                        @endphp
                    </td>
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


{{--
 @extends('Frontend.master')
@section('content')
<br> <br> <br> <br> <br> <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Booking List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Tran-ID</th>
                    <th>Pickupdate</th>
                    <th>Action</th> <!-- Added Action column -->
                </tr>
            </thead>
            <tbody>
               @foreach ($bookings as $key => $booking )
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->quantity }}</td>
                    <td>
                        @if($booking->chooseroom === "Single Bed for 2 persons in a room")
                            Single Bed
                        @elseif($booking->chooseroom === "Double Bed for 4 persons in a room")
                            Double Bed
                        @endif
                    </td>
                    <td>
                        @if($booking->payment_status === "Pending")
                            <span class="text-danger">Pending</span>
                        @elseif($booking->payment_status === "confirm")
                            <span class="text-success">Confirm</span>
                        @endif
                    </td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->transaction_id}}</td>
                    <td>{{ $booking->pickupdate}}</td>
                    <td>
                        @php
                            $pickupdate = strtotime($booking->pickupdate); // Convert pickupdate to UNIX timestamp
                            $currentDateTime = strtotime(now()); // Get current date and time in UNIX timestamp
                            $difference = $pickupdate - $currentDateTime; // Calculate difference in seconds
                            $hoursDifference = $difference / (60 * 60); // Convert difference to hours
                        @endphp

                        @if($hoursDifference > 24)
                            <form method="POST" action="{{ route('cancel.booking', $booking->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>
                            </form>
                        @endif
                    </td>
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
@endsection --}}


{{--
@extends('Frontend.master')
@section('content')
<br> <br> <br> <br> <br> <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Booking List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Amount</th>
                    <th>Tran-ID</th>
                    <th>Pickupdate</th>
                    <th>Action</th> <!-- Added Action column -->
                </tr>
            </thead>
            <tbody>
               @foreach ($bookings as $key => $booking )
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->quantity }}</td>
                    <td>
                        @if($booking->chooseroom === "Single Bed for 2 persons in a room")
                            Single Bed
                        @elseif($booking->chooseroom === "Double Bed for 4 persons in a room")
                            Double Bed
                        @endif
                    </td>
                    <td>
                        @if($booking->payment_status === "Pending")
                            <span class="text-danger">Pending</span>
                        @elseif($booking->payment_status === "confirm")
                            <span class="text-success">Confirm</span>
                        @endif
                    </td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->transaction_id}}</td>
                    <td>{{ $booking->pickupdate}}</td>
                    <td>
                        @php
                            $pickupdate = strtotime($booking->pickupdate); // Convert pickupdate to UNIX timestamp
                            $currentDateTime = strtotime(now()); // Get current date and time in UNIX timestamp
                            $difference = $pickupdate - $currentDateTime; // Calculate difference in seconds
                            $hoursDifference = $difference / (60 * 60); // Convert difference to hours
                        @endphp

                        @if($booking->payment_status === "confirm" && $hoursDifference > 24)
                            <form id="cancelForm_{{ $booking->id }}" method="POST" action="{{ route('cancel.booking', $booking->id) }}">
                                @csrf
                                <button type="button" onclick="confirmCancellation({{ $booking->id }})" class="btn btn-danger"><i class="fas fa-times"></i></button>
                            </form>
                        @endif
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function confirmCancellation(bookingId) {
        if (confirm("Are you sure you want to cancel the package?")) {
            document.getElementById('cancelForm_' + bookingId).submit();
        }
    }
</script>
</body>
</html>
@endsection --}}


@extends('Frontend.master')
@section('content')
<br> <br> <br> <br> <br> <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-0 mb-5">
    <h2 class="text-center mb-4">Booking List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Number</th>
                    {{-- <th>Email</th> --}}
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Amount (BDT)</th>
                    <th>Tran-ID</th>
                    <th>Pickupdate</th>
                    <th>Action</th> <!-- Added Action column -->
                </tr>
            </thead>
            <tbody>
               @foreach ($bookings as $key => $booking )
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    {{-- <td>{{ $booking->email }}</td> --}}
                    <td>{{ $booking->quantity }}</td>
                    <td>
                        @if($booking->chooseroom === "Single Bed for 2 persons in a room")
                            Single Bed
                        @elseif($booking->chooseroom === "Double Bed for 4 persons in a room")
                            Double Bed
                        @endif
                    </td>
                    <td>
                        @if($booking->payment_status === "Pending")
                            <span class="text-danger">Pending</span>
                        @elseif($booking->payment_status === "confirm")
                            <span class="text-success">Confirm</span>
                        @endif
                    </td>
                    <td>{{ $booking->amount }}</td>
             <td>
                    @if($booking->payment_status === "Pending")
                    <span class="text-danger">    ---     </span>
                @elseif($booking->payment_status === "confirm")
                    <span class="text-success">{{ $booking->transaction_id }}</span>
                @endif
            </td>

            <td>
                @if($booking->payment_status === "Pending")
                <span class="text-danger">    ---     </span>
            @elseif($booking->payment_status === "confirm")
                <span class="text-success">{{ \Carbon\Carbon::parse($booking->pickupdate)->format('d F, Y \a\t h:i A') }}</span>
            @endif
        </td>


                    <td>
                        @if($booking->status === "canceled")
                            Canceled
                        @else
                            @php
                                $pickupdate = strtotime($booking->pickupdate); // Convert pickupdate to UNIX timestamp
                                $currentDateTime = strtotime(now()); // Get current date and time in UNIX timestamp
                                $difference = $pickupdate - $currentDateTime; // Calculate difference in seconds
                                $hoursDifference = $difference / (60 * 60); // Convert difference to hours
                            @endphp

                            @if($booking->payment_status === "confirm" && $hoursDifference > 24)
                                <form id="cancelForm_{{ $booking->id }}" method="POST" action="{{ route('cancel.booking', $booking->id) }}">
                                    @csrf
                                    <button type="button" onclick="confirmCancellation({{ $booking->id }})" class="btn btn-danger"><i class="fas fa-times"></i></button>
                                </form>
                            @endif
                        @endif
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // JavaScript function for confirmation dialog
    function confirmCancellation(bookingId) {
        if (confirm("Are you sure you want to cancel the package?")) {
            document.getElementById('cancelForm_' + bookingId).submit();
        }
    }
</script>
</body>
</html>
@endsection
