{{-- @extends('Admin.master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Package Create</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .form-container h2 {
      margin-bottom: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="form-container">
        <h2>Hotel Booking Form</h2>
        <form method="post" action="{{route('package.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="pickupdate" class="form-label">Pickup Date:</label>
            <input type="date" class="form-control" id="pickupdate" name="pickupdate" required>
          </div>
          <div class="mb-3">
            <label for="duration" class="form-label">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" required>
          </div>
          <div class="mb-3">
            <label for="returndate" class="form-label">Return Date:</label>
            <input type="date" class="form-control" id="returndate" name="returndate" required>
          </div>
          <div class="mb-3">
            <label for="totalseat" class="form-label">Total Seats:</label>
            <input type="number" class="form-control" id="totalseat"  name="totalseat" required>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" class="form-control" id="price" name="price" required>
          </div>
          <div class="mb-3">
            <label for="spot" class="form-label">Spot:</label>
            <input type="text" class="form-control" id="spot" name="spot" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description" ></textarea>
          </div>
          <div class="mb-3">
            <label for="hotel_id" class="form-label">Hotel:</label>
            <select class="form-select" id="hotel_id" name="hotel_id" required>
              <option selected disabled value="">Select Hotel</option>
              @foreach ($hotels as $hotel )
              <option value="{{$hotel->id}}">{{$hotel->name}}</option>
              @endforeach

            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


@endsection --}}


@extends('Admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Package Create</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .form-container h2 {
      margin-bottom: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="form-container">
        <h2>Hotel Booking Form</h2>
        <form method="post" action="{{ route('package.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
          </div>
          <div class="mb-3">
            <label for="pickupdate" class="form-label">Pickup Date:</label>
            <input type="date" class="form-control" id="pickupdate" name="pickupdate" value="{{ old('pickupdate') }}" required>
          </div>
          <div class="mb-3">
            <label for="duration" class="form-label">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" required>
          </div>
          <div class="mb-3">
            <label for="returndate" class="form-label">Return Date:</label>
            <input type="date" class="form-control" id="returndate" name="returndate" value="{{ old('returndate') }}" required>
          </div>
          <div class="mb-3">
            <label for="totalseat" class="form-label">Total Seats:</label>
            <input type="number" class="form-control" id="totalseat" name="totalseat" value="{{ old('totalseat') }}" required>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
          </div>
          <div class="mb-3">
            <label for="spot" class="form-label">Spot:</label>
            <input type="text" class="form-control" id="spot" name="spot" value="{{ old('spot') }}" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
          </div>
          <div class="mb-3">
            <label for="hotel_id" class="form-label">Hotel:</label>
            <select class="form-select" id="hotel_id" name="hotel_id" >
                <option selected disabled value="">Select Hotel</option>
                @foreach ($hotels as $hotel)
                    <option value="{{ $hotel->id }}" {{ old('hotel_id') == $hotel->id ? 'selected' : '' }}>
                        {{$hotel->id}}. {{ $hotel->name }}, {{$hotel->address}} & {{$hotel->type}}
                    </option>
                @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

@endsection
