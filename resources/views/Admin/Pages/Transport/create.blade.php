@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            border-radius: 10px;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container mt-0">
    <h2 class="mb-4">Add New Transport</h2>
    <form action="{{route('transport.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" required value="{{old('name')}}" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type">
                <option value="">Select Type</option>
                <option value="Non AC Bus" {{old('type')== 'Non AC Bus'? 'selected': ''}}>Non AC Bus</option>
                <option value="AC Bus" {{old('type')=='AC Bus'? 'selected': ''}}>AC Bus</option>
                <option value="Sleeper Bus" {{old('type')=='Sleeper Bus'? 'selected': ''}}>Sleeper Bus</option>
            </select>

        </div>

        <div class="mb-3">
            <label for="destination_id" class="form-label">Destination:</label>
            <select class="form-select" id="destination_id" name="destination_id">
                <option selected disabled value="">Select Destination</option>
                @foreach ($destinations as $destination)
                <option value="{{ $destination->id }}" {{ old('destination_id')==$destination->id ? 'selected' : '' }}>
                    {{$destination->id}}. {{ $destination->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">BDT</span>
                </div>
                <input type="text" value="{{old('price')}}" class="form-control" id="price" name="price" placeholder="Enter price">
            </div>
        </div>
        <div class="form-group">
            <label for="totalvehicles">No Of Vehicles</label>
            <input value="{{old('totalvehicles', 1)}}" type="number" class="form-control" id="totalvehicles" name="totalvehicles" placeholder="Enter Total No of Vehicles">
        </div>
        <div class="form-group">
            <label for="totalseat">No of Seats</label>
            <input value="{{old('totalseat',1 )}}" type="number" class="form-control" id="totalseat" name="totalseat" placeholder="Enter Total No of Vehicles">
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input value="{{old('number')}}" type="number" class="form-control" id="number" name="number" placeholder="Enter number">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function previewImage(input) {
        const file = input.files[0];
        const label = document.getElementById('fileLabel');
        const imagePreview = document.getElementById('imagePreview');

        // Display file name
        label.innerText = file.name;

        // Check if file is an image
        if (file.type.match('image.*')) {
            const reader = new FileReader();

            reader.onload = function(event) {
                // Create an image element
                const img = document.createElement('img');
                img.src = event.target.result;
                img.classList.add('img-thumbnail');
                // Clear previous image preview, if any
                imagePreview.innerHTML = '';
                // Append the new image preview
                imagePreview.appendChild(img);
            }

            reader.readAsDataURL(file);
        } else {
            // Clear image preview if file is not an image
            imagePreview.innerHTML = '';
        }
    }
</script>

</body>
</html>
@endsection
