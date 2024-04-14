
@extends('Frontend.master')
@section('content')
<br> <br> <br> <br> <br> <br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            overflow: hidden;
            width: 800px;
            display: flex;
            flex-direction: row;
        }



        .left-content {
            flex: 1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .terms-and-conditions {
            text-align: center;
        }

        .right-content {
            flex: 1;
            padding: 30px;
        }

        .card-title {
            font-size: 2.5rem;
            color: #343a40;
            margin-bottom: 15px;
        }

        .card-text {
            color: #6c757d;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card mx-auto mb-5">

            <div class="left-content">

                <img src="{{ asset($singlepackageview->image) }}" class="card-img-top img-fluid" alt="">

                    <h2 class="card-title text-danger"> Conditions</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. If you wish to cancel your booking after payment is made, you must do so at least 24 hours prior to the pickup date, and you will receive a refund of 80% of the total amount paid.</li>
                        <li class="list-group-item">2. Refunds will not be provided if cancellation is made less than 24 hours before the pickup date.</li>
                    </ul>

            </div>

            <div class="right-content mb-5 my-1">

                <p class="card-text"><strong>Pick Up: </strong>{{ date('j M, Y \a\t g:i A', strtotime($singlepackageview->pickupdate)) }} from  {{ $singlepackageview->startingpoint }}.</p>

                <p class="card-text"><strong>Destination:</strong> {{ $singlepackageview->destination }} </p>
                <p class="card-text"><strong>Duration:</strong> {{ $singlepackageview->duration }}</p>



                <p class="card-text"><strong> Initial Amount:</strong> {{ $singlepackageview->price }} </p>
                <p class="card-text"><strong>Description:</strong> {{ $singlepackageview->description }}</p>
                <p class="card-text"><strong>Hotel Type:</strong> {{ $singlepackageview->hotels->type }} </p>
                <p class="card-text"><strong>Transport:</strong> {{ $singlepackageview->transports->name }}, {{ $singlepackageview->transports->type }}</p>
                <p class="card-text"><strong>Spot Names:</strong> {{ $singlepackageview->spot }}</p>
                <p class="text-info fs-3"> You will receive information about your transport seat, hotel room and other details via email.</p>


                <a href="{{ route("reservation.form", $singlepackageview->id) }}">
                    <button type="button" class="btn btn-outline-success btn-block">Booking the Package</button>
                </a>

            </div>


        </div>
    </div>


</body>

</html>


@endsection

