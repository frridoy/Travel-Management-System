
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

        /* Print Styles */
        @media print {
            body {
                background-color: #fff; /* Change background color for printing */
            }
            .profile-container {
                box-shadow: none; /* Remove box shadow for printing */
                border: none; /* Remove border for printing */
                padding: 0; /* Remove padding for printing */
            }
            .left-column,
            .right-column {
                width: 48%; /* Set the width for each column */
                padding: 20px; /* Add padding for printing */
                border: 1px solid #ccc; /* Add border for printing */
                border-radius: 8px; /* Add border radius for printing */
                margin-top: 20px; /* Add margin for printing */
            }
            .profile-picture img {
                width: auto; /* Reset width for printing */
                height: auto; /* Reset height for printing */
            }
            .user-info hr {
                display: none; /* Hide horizontal lines for printing */
            }
            .btn {
                display: none; /* Hide print button for printing */
            }
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
        <a href="#" class="btn btn-outline-info mt-3" id="printButton" onclick="printContent('printDiv')">
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
            document.getElementById('printButton').style.display = 'none'; // Hide print button after printing
        }
    </script>
@endpush  --}}

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
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .left-column,
        .right-column {
            width: 48%;
            padding: 20px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            text-align: center;
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

        /* Print Styles */
        @media print {
            body {
                background-color: #fff;
            }
            .profile-container {
                box-shadow: none;
                border: none;
                padding: 0;
            }
            .left-column,
            .right-column {
                width: 48%;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 8px;
                margin-top: 20px;
            }
            .profile-picture img {
                width: auto;
                height: auto;
            }
            .user-info hr {
                display: none;
            }
            .btn {
                display: none;
            }
        }

        /* Additional Styles */
        .project-name {
            text-align: center;
            margin-bottom: 20px;
        }

        .project-name h2 {
            color: #333;
            font-size: 24px;
            margin: 0;
        }

        .company-logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .company-logo img {
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>

<div class="project-name">
    <h2>Tourism Management System</h2>
</div>

<div class="company-logo">
    <img src="{{ asset('assests/companylogo.avif') }}" alt="Company Logo">
</div>

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
        <a href="#" class="btn btn-outline-info mt-3" id="printButton" onclick="printContent('printDiv')">
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
            document.getElementById('printButton').style.display = 'none';
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
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .left-column,
        .right-column {
            width: 48%;
            padding: 20px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
            text-align: center;
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

        /* Print Styles */
        @media print {
            body {
                background-color: #fff;
            }
            .profile-container {
                box-shadow: none;
                border: none;
                padding: 0;
            }
            .left-column,
            .right-column {
                width: 48%;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 8px;
                margin-top: 20px;
            }
            .profile-picture img {
                width: auto;
                height: auto;
            }
            .user-info hr {
                display: none;
            }
            .btn {
                display: none;
            }
            .company-logo {
                display: block !important; /* Show the company logo when printing */
            }
        }

        /* Additional Styles */
        .project-name {
            text-align: center;
            margin-bottom: 20px;
        }

        .project-name h2 {
            color: #333;
            font-size: 24px;
            margin: 0;
        }

        .company-logo {
            text-align: center;
            margin-bottom: 20px;
            display: none; /* Initially hide the company logo */
        }

        .company-logo img {
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>

<div class="project-name">
    <h2>Tourism Management System</h2>
</div>

<div class="company-logo">
    <img src="{{ asset('assests/companylogo.avif') }}" alt="Company Logo">
</div>

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
            <h6> Package Code:TMS- {{$booking->code}}</h6> <hr>
            <h6>Quantity: {{$booking->quantity}} Person</h6> <hr>
            <h6>Paid Amount: {{$booking->amount}} BDT</h6> <hr>
            <h6>Tran Id: {{$booking->transaction_id}}</h6> <hr>
            <h6>Payment: {{$booking->payment_status}}</h6> <hr>
            <h6>Pickupdate: {{ date('j F, Y ,g:i A', strtotime($booking->pickupdate)) }} from {{$booking->startingpoint}} </h6>

           <hr>
        </div>
        <a href="#" class="btn btn-outline-info mt-3" id="printButton" onclick="printContent('printDiv')">
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
            document.getElementById('printButton').style.display = 'none';
        }
    </script>
@endpush
