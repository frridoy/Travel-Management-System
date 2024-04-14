@extends('Frontend.master')
@section('content')
<br> <br> <br> <br>

<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 15px 15px 0 0;
        }

        .form-control {
            border-radius: 10px;
        }

        button.btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 10px;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <form action="{{route('reservation.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center bg-info text-white">
                            <h4 class="mb-0 font-weight-bold">Reservation Form</h4>
                        </div>

                        <div class="card-body">
                            {{-- <form action="" method="" enctype="multipart/form-data">
                                @csrf --}}

                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">Name</label>
                                    <input type="name" required name="name" class="form-control" id="name"
                                        placeholder="Enter your Name">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="font-weight-bold">Email</label>
                                    <input type="email" required name="email" class="form-control" id="email"
                                        placeholder="Enter your email">
                                </div>

                                <div class="form-group">
                                    <label for="contact" class="font-weight-bold">Contact Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                        <input type="tel" pattern="[0-9]{1,13}" name="number" required
                                            class="form-control" id="contact" placeholder="Enter your contact number">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="address" class="font-weight-bold">Address</label>
                                    <textarea class="form-control" required name="address" id="address" rows="1"
                                        placeholder="Enter your address"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image" class="font-weight-bold">Image</label>
                                    <input type="file" accept="image/*" name="image" class="form-control" id="image"
                                        placeholder="Upload your image">
                                </div>



                                <input type="hidden" name="price" value="{{$singlepackageview->price}}">
                                <input type="hidden" name="id" value="{{$singlepackageview->id}}">




                                <div class="form-group">
                                    <label for="quantity" class="font-weight-bold">Quantity</label>
                                    <div class="input-group">
                                        <input type="number" value="1" required name="quantity"
                                            class="form-control border-0 bg-light" id="quantity"
                                            placeholder="Enter quantity" aria-describedby="quantity-addon" min="1"
                                        >
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-primary text-white"
                                                id="quantity-addon">Person(s)</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="chooseroom" name="chooseroom" class="font-weight-bold">Choose
                                        Room</label>
                                    <div class="input-group">
                                        <select name="chooseroom" required
                                            class="custom-select form-control border-0 bg-light" id="roomNumber">
                                            <option selected disabled>Select Room...1000 BDT will be add if two person in a room</option>
                                            <option>Single Bed for 2 persons in a room</option>
                                            <option>Double Bed for 4 persons in a room</option>

                                        </select>
                                    </div>
                                </div>


                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {

                                        function updateAmount() {
                                            var roomType = document.getElementById('roomNumber').value;
                                            var quantity = document.getElementById('quantity').value;
                                            var baseAmount = {{$singlepackageview->price}} * quantity;


                                            var additionalAmount = (roomType === "Single Bed for 2 persons in a room") ? 1000 * quantity : 0;
                                            var updatedAmount = baseAmount + additionalAmount;


                                            document.getElementById('amount').value = updatedAmount;
                                        }


                                        document.getElementById('roomNumber').addEventListener('change', updateAmount);
                                        document.getElementById('quantity').addEventListener('input', updateAmount);


                                        updateAmount();
                                    });
                                </script>




<div class="form-group">
    <label for="amount" class="font-weight-bold"> Total Amount</label>
    <input type="text" readonly class="form-control" id="amount" name="amount">
</div>


                    <button type="submit" class="btn btn-primary btn-block">Payment</button>



                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


</body>

</html>
@endsection


