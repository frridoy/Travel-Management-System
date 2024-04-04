@extends('Admin.master')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-container">
                <h2>Package Create</h2>
                <form method="post" action="{{ route('package.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="pickupdate" class="form-label">Pickup Date:</label>
                        @php

                        // $now = now()->format('Y-m-d\TH:i');

                        $now = now()->addDay()->format('Y-m-d\TH:i');

                        @endphp
                        <input type="datetime-local" class="form-control" id="pickupdate" name="pickupdate"
                            value="{{ old('pickupdate') }}" required min="{{ $now }}" onchange="updateReturnDateMin()">
                    </div>

                    <div class="mb-3">
                        <label for="returndate" class="form-label">Return Date:</label>
                        <input type="datetime-local" class="form-control" id="returndate" name="returndate"
                            value="{{ old('returndate') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration:</label>
                        <input type="text" class="form-control" id="duration" name="duration"
                            value="{{ old('duration') }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="hotel_id" class="form-label">Hotel:</label>
                        <select class="form-select" id="hotel_id" name="hotel_id">
                            <option selected disabled value="">Select Hotel</option>
                            @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->id }}" {{ old('hotel_id')==$hotel->id ? 'selected' : '' }}>
                                {{$hotel->id}}. {{ $hotel->name }}, {{$hotel->address}} & {{$hotel->type}}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="transport_id" class="form-label"> Transport:</label>
                        <select class="form-select" id="transport_id" name="transport_id">
                            <option selected disabled value="">Select Transport</option>
                            @foreach ($transports as $transport)
                            <option value="{{ $transport->id }}" {{ old('transport_id')==$transport->id ? 'selected' : '' }}>
                                {{$transport->id}}. {{ $transport->name }}, {{$transport->address}} & {{$transport->type}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="totalseat" class="form-label">Total Seats:</label>
                        <input type="number" class="form-control" id="totalseat" name="totalseat"
                            value="{{ old('totalseat') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="spot" class="form-label">Spot:</label>
                        <input type="text" class="form-control" id="spot" name="spot" value="{{ old('spot') }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description"
                            name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image:</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('pickupdate').addEventListener('change', function() {
        updateDuration();
    });

    document.getElementById('returndate').addEventListener('change', function() {
        updateDuration();
    });

    function updateDuration() {
        var pickupDate = new Date(document.getElementById('pickupdate').value);
        var returnDate = new Date(document.getElementById('returndate').value);

        if (pickupDate >= returnDate) {
            alert("Return date should be after pickup date.");
            document.getElementById('returndate').value = '';
            return;
        }

        var diffTime = Math.abs(returnDate - pickupDate);
        var diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));

        // Calculate number of nights
        var diffNights = diffDays;
        if (pickupDate.getHours() > returnDate.getHours()) {
            diffNights++;
        }

        var duration = diffDays + " days";
        if (diffNights > 0) {
            duration += ` & ${diffNights} nights`;
        }

        document.getElementById('duration').value = duration;
    }
</script>


@endsection
