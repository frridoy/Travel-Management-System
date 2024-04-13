@extends('Admin.master')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Hotel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom styling */
        .card {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 20px 20px 0 0;
        }
        .form-control {
            border-radius: 20px;
            border-color: #ccc;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container mt-0">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center mb-0">Create Hotel</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select name="type" id="type" class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="3 Star Non AC Room">3 star non AC room</option>
                                <option value="4 Star AC Room">4 star AC room</option>
                                <option value="5 Star AC Room">5 star AC room</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" value="{{old('address')}}" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="singlebedprice">Single Bed Price:</label>
                            <input type="number" value="{{old('singlebedroom')}}" name="singlebedprice" id="singlebedprice" class="form-control" placeholder="2 persons in a room" min="1" step="1" required>
                        </div>
                        <div class="form-group">
                            <label for="doublebedprice">Double Bed Price:</label>
                            <input type="number" value="{{old('doublebedroom')}}" name="doublebedprice" id="doublebedprice" class="form-control" placeholder="4 persons in a room" min="1" step="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="form-group">
                            <label for="number">Contact Number:</label>
                            <input type="text" value="{{old('number')}}" name="number" id="number" class="form-control" pattern="^01[3-9][0-9]{8}$" required>
                            <small class="form-text text-muted">Enter a valid phone number starting with 01(3-9) and rest of the 8 digits.</small>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
