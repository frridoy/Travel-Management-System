@extends('Frontend.master')
@section('content')
<br> <br> <br> <br> <br> <br>
<!DOCTYPE html>
<html lang="en">

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
                        <th>Person</th>
                        <th>Room</th>
                        <th>Payment</th>
                        <th>Amount</th>
                        <th>Tran-ID</th>
                        <th>Pickupdate</th>
                        <th>Starting Point</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($bookings as $key => $booking )
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>TMS- {{ $booking->code}}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->number }}</td>

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
                        <td>{{ $booking->amount }} BDT</td>
                        <td>
                            @if($booking->payment_status === "Pending")
                            <span class="text-danger"> --- </span>
                            @elseif($booking->payment_status === "confirm")
                            <span class="text-success">{{ $booking->transaction_id }}</span>
                            @endif
                        </td>

                        <td>
                            @if($booking->payment_status === "Pending")
                            <span class="text-danger"> --- </span>
                            @elseif($booking->payment_status === "confirm")
                            <span class="text-success">{{ \Carbon\Carbon::parse($booking->pickupdate)->format('d F, Y
                                \a\t h:i A') }}</span>
                            @endif
                        </td>


                        <td>
                            @if($booking->payment_status === "Pending")
                            <span class="text-danger"> --- </span>
                            @elseif($booking->payment_status === "confirm")
                            <span class="text-success">{{ $booking->startingpoint }}</span>
                            @endif
                        </td>


                        <td>
                            @if($booking->status === "canceled")
                            Canceled
                            @else
                            @php
                            $pickupdate = strtotime($booking->pickupdate);
                            $currentDateTime = strtotime(now());
                            $difference = $pickupdate - $currentDateTime;
                            $hoursDifference = $difference / (60 * 60);
                            @endphp

                            @if($booking->payment_status === "confirm" && $hoursDifference > 30)
                            <form id="cancelForm_{{ $booking->id }}" method="POST"
                                action="{{ route('cancel.booking', $booking->id) }}">
                                @csrf
                                <button type="button" onclick="confirmCancellation({{ $booking->id }})"
                                    class="btn btn-danger"><i class="fas fa-times"></i></button>
                            </form>
                            @endif

                            <a href="{{ route('tourist.bookingView', $booking->id) }}" class="btn btn-info">

                                <span style="font-size: 0.7rem;"><i class="fas fa-eye"></i></span>

                            </a>

                            @endif



                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script>
        function confirmCancellation(bookingId) {
        if (confirm("Are you sure you want to Cancel the Package?")) {
            document.getElementById('cancelForm_' + bookingId).submit();
        }
    }
    </script>


</body>

</html>


@endsection
