
{{--
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
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Payment Amount</th>
                    <th>Transaction ID</th>
                    <th>Refund</th>
                    <th>Final Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalAmount = 0; ?>
                @foreach($bookings as $key => $booking)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->address }}</td>
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
                    <td>
                        @if($booking->status === 'canceled' && !$booking->refund_processed)
                            <a href="{{ route('refund', $booking->id) }}" class="btn btn-warning">Refund</a>
                        @endif
                    </td>
                    <td>
                        @if($booking->refund_processed)
                            {{ $booking->final_amount }} BDT
                        @else
                            {{ $booking->amount }} BDT
                        @endif
                    </td>
                </tr>
                <?php $totalAmount += $booking->amount; ?>
                @endforeach
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Amount:</strong></td>
                    <td colspan="4">{{ $totalAmount }} BDT</td>
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
@endsection --}}





{{--
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
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Person</th>
                    <th>Room</th>
                    <th>Payment</th>
                    <th>Payment Amount</th>
                    <th>Transaction ID</th>
                    <th>Refund Action</th>
                    <th>Final Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalAmount = 0; $totalRefund = 0; $totalFinalAmount = 0; ?>
                @foreach($bookings as $key => $booking)
                @if($booking->payment_status === "confirm")
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->number }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->address }}</td>
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
                    <td>
                        @if($booking->status === 'canceled' && !$booking->refund_processed)
                            <a href="{{ route('refund', $booking->id) }}" class="btn btn-warning">Refund</a>
                            <?php $refundAmount = $booking->amount * 0.8; ?>
                            <?php $totalRefund += $refundAmount; ?>
                            {{ $refundAmount }} BDT
                        @elseif($booking->status === 'canceled' && $booking->refund_processed)
                            {{ $booking->amount * 0.8 }} BDT
                            <?php $totalRefund += ($booking->amount * 0.8); ?>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if($booking->refund_processed)
                            {{ $booking->amount * 0.2 }} BDT
                            <?php $totalFinalAmount += ($booking->amount * 0.2); ?>
                        @else
                            {{ $booking->amount }} BDT
                            <?php $totalFinalAmount += $booking->amount; ?>
                        @endif
                    </td>
                </tr>
                <?php $totalAmount += $booking->amount; ?>
                @endif
                @endforeach
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Amount:</strong></td>
                    <td colspan="4">{{ $totalAmount }} BDT</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Refund:</strong></td>
                    <td colspan="4">{{ $totalRefund }} BDT</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Final Amount:</strong></td>
                    <td colspan="4">{{ $totalFinalAmount }} BDT</td>
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
@endsection --}}


@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>
<div class="container mt-0">



    <h2 class="text-center mb-0"> Confirmed Booking List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Package</th>
                    <th>Name</th>
                    <th>Destination</th>

                    <th>Person</th>
                    {{-- <th>Room</th> --}}
                    <th>Payment Status</th>
                    <th>Payment Amount</th>
                    <th>Transaction ID</th>
                    <th>Refund Action</th>
                    <th>Final Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalAmount = 0; $totalFinalAmount = 0; ?>
                @foreach($bookings as $key => $booking)
                @if($booking->payment_status === "confirm")
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>TMS- {{ $booking->code}}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->destination }}</td>

                    <td>{{ $booking->quantity }}</td>
                    {{-- <td>
                        @if($booking->chooseroom === "Single Bed for 2 persons in a room")
                            Single Bed
                        @elseif($booking->chooseroom === "Double Bed for 4 persons in a room")
                            Double Bed
                        @endif
                    </td> --}}
                    <td>
                        @if($booking->payment_status === "Pending")
                            <span class="text-danger">Pending</span>
                        @elseif($booking->payment_status === "confirm")
                            <span class="text-success">Confirm</span>
                        @endif
                    </td>
                    <td>{{ $booking->amount }}</td>
                    <td>{{ $booking->transaction_id}}</td>
                    <td>
                        @if($booking->status === 'canceled' && !$booking->refund_processed)
                            <a href="{{ route('refund', $booking->id) }}" class="btn btn-warning">Refund</a>
                            <?php $refundAmount = $booking->amount * 0.8; ?>
                            {{ $refundAmount }} BDT
                        @elseif($booking->status === 'canceled' && $booking->refund_processed)
                            {{ $booking->amount * 0.8 }} BDT
                        @else
                            ---
                        @endif
                    </td>
                    <td>
                        @if($booking->refund_processed)
                            {{ $booking->amount * 0.2 }} BDT
                            <?php $totalFinalAmount += ($booking->amount * 0.2); ?>
                        @else
                            {{ $booking->amount }} BDT
                            <?php $totalFinalAmount += $booking->amount; ?>
                        @endif
                    </td>
                </tr>
                <?php $totalAmount += $booking->amount; ?>
                @endif
                @endforeach
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Amount:</strong></td>
                    <td colspan="3">{{ $totalAmount }} BDT</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Refund:</strong></td>
                    <td colspan="3">{{ calculateTotalRefund($bookings) }} BDT</td>
                </tr>
                <tr>
                    <td colspan="9" class="text-right"><strong>Total Final Amount:</strong></td>
                    <td colspan="3">{{ $totalFinalAmount }} BDT</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

>
</body>
</html>
@endsection

@php
function calculateTotalRefund($bookings) {
    $totalRefund = 0;
    foreach ($bookings as $booking) {
        if ($booking->status === 'canceled' && $booking->refund_processed) {
            $totalRefund += ($booking->amount * 0.8);
        }
    }
    return $totalRefund;
}
@endphp



