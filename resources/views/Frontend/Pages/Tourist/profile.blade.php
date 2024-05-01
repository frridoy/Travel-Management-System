{{--



@extends('Frontend.master')

@section('content')
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<div class="container mt-2 mb-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Profile Information</h5>
          <h4>{{ auth()->user()->name }}</h4>
          <hr>
          <p class="card-text"><strong>Your ID:</strong> {{ auth()->user()->id }}</p>
          <p class="card-text"><strong>Email:</strong> {{ auth()->user()->email }}</p>
          <a href="#" class="btn btn-primary btn-block mt-3">Edit Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent Bookings</h5>
          @if($userdata->isEmpty())
            <p class="card-text">You have not made any bookings yet.</p>
          @else
            @foreach ($userdata as $item)
              <div class="border-bottom mb-3 pb-3">
                <h6><strong>Amount:</strong> {{ $item['amount'] }} BDT</h6>
                <h6><strong>Payment Status:</strong> {{ $item['payment_status'] }}</h6>
                <h6><strong>Transaction Id:</strong> {{ $item['transaction_id'] }}</h6>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection --}}


@extends('Frontend.master')

@section('content')
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<div class="container mt-0 mb-5"> <!-- Reduced mt-2 to mt-0 -->
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Profile Information</h5>
          <h4>{{ auth()->user()->name }}</h4>
          <hr>
          <p class="card-text"><strong>Tourist ID:</strong> {{ auth()->user()->id }}</p>
          <p class="card-text"><strong>Email:</strong> {{ auth()->user()->email }}</p>
          <a href="#" class="btn btn-primary btn-block mt-3">Edit Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent Bookings</h5>
          @if($userdata->isEmpty())
            <p class="card-text">You have not made any bookings yet.</p>
          @else
            @foreach ($userdata as $item)
              <div class="border-bottom mb-3 pb-3">
                <h6><strong>Amount:</strong> {{ $item['amount'] }} BDT</h6>
                <h6><strong>Payment Status:</strong> {{ $item['payment_status'] }}</h6>
                <h6><strong>Transaction Id:</strong> {{ $item['transaction_id'] }}</h6>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
