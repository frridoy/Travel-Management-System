{{--
@extends('Frontend.master')
@section('content')
<br> <br> <br>






<div id="printDiv">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            max-width: 800px; /* Increased the max-width for better two-column layout */
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; /* Use flex display for two columns */
            justify-content: space-between; /* Add space between the two columns */
        }

        .left-column,
        .right-column {
            width: 48%; /* Set the width for each column */
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            text-align: center;
            margin-top: 20px;
        }

        .user-info h4 {
            margin: 0;
            color: #333;
        }

        .user-info h6 {
            color: #666;
        }

        .btn {
            display: block;
            margin-top: 0px;
        }

    </style>
</head>
<body>

<div class="profile-container">

    <div class="profile-picture">
        @if($booking->image)
            <img src="{{ asset($booking->image) }}" alt="Profile Picture" style="width: 150px; height: 150px;">
        @else
            <img src="{{ asset('assests/human-icon.jpg') }}" alt="Default Picture" style="width: 50px; height: 50px;">
        @endif
    </div>

        <hr>
        <h4>{{ $booking->name }}</h4><hr>
        <h6>Email: {{ $booking->email }}</h6> <hr>
            <h6>Contact: {{ $booking->number }}</h6> <hr>
            <h6>Address: {{ $booking->address }}</h6><hr>
            <h6>Package: {{ $booking->destination }}</h6><hr>

    </div>

    <div class="right-column">
        <div class="user-info">

<hr>
            <h6> Room: {{$booking->chooseroom}}</h6> <hr>
            <h6> Package Code: {{$booking->code}}</h6> <hr>
            <h6>Quantity: {{$booking->quantity}} Person</h6> <hr>
            <h6>Paid Amount: {{$booking->amount}} BDT</h6> <hr>
            <h6>Tran Id: {{$booking->transaction_id}}</h6> <hr>
            <h6>Payment: {{$booking->payment_status}}</h6> <hr>

        </div>

        <a href="#" class="btn btn-outline-info mt-3" onclick="printContent('printDiv')">
            <i class="fas fa-print"></i> Print Booking Report
        </a>
    </div>

</div>

</body>
</html>
</div>

@endsection

@push('reportcode')
    <script type="text/javascript">
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>
@endpush --}}



@extends('Frontend.master')

@section('content')
<br> <br> <br>

<div id="printDiv">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            max-width: 800px; /* Increased the max-width for better two-column layout */
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; /* Use flex display for two columns */
            justify-content: space-between; /* Add space between the two columns */
        }

        .left-column,
        .right-column {
            width: 48%; /* Set the width for each column */
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            text-align: center; /* Center the image */
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            text-align: center;
            margin-top: 20px;
        }

        .user-info h4 {
            margin: 0;
            color: #333;
        }

        .user-info h6 {
            color: #666;
        }

        .btn {
            display: block;
            margin-top: 0px;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <div class="left-column">
        <div class="profile-picture">
            @if($booking->image)
                <img src="{{ asset($booking->image) }}" alt="Profile Picture">
            @else
                <img src="{{ asset('assests/human-icon.jpg') }}" alt="Default Picture">
            @endif
        </div>
        <div class="user-info">
            <hr>
            <h4>{{ $booking->name }}</h4><hr>
            <h6>Email: {{ $booking->email }}</h6> <hr>
            <h6>Contact: {{ $booking->number }}</h6> <hr>
            <h6>Address: {{ $booking->address }}</h6><hr>
            <h6>Package: {{ $booking->destination }}</h6><hr>
        </div>
    </div>

    <div class="right-column">
        <div class="user-info">
            <hr>
            <h6> Room: {{$booking->chooseroom}}</h6> <hr>
            <h6> Package Code: {{$booking->code}}</h6> <hr>
            <h6>Quantity: {{$booking->quantity}} Person</h6> <hr>
            <h6>Paid Amount: {{$booking->amount}} BDT</h6> <hr>
            <h6>Tran Id: {{$booking->transaction_id}}</h6> <hr>
            <h6>Payment: {{$booking->payment_status}}</h6> <hr>
        </div>
        <a href="#" class="btn btn-outline-info mt-3" onclick="printContent('printDiv')">
            <i class="fas fa-print"></i> Print Booking Report
        </a>
    </div>
</div>

</body>
</html>
</div>

@endsection

@push('reportcode')
    <script type="text/javascript">
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>
@endpush
