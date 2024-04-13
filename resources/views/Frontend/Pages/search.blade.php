{{-- @extends('Frontend.master')
@section('content')
 <br> <br> <br> <br>
<section class="top-packages container-fluid">
    <div class="container">
        <div class="session-title row">
            <h2>Top Packages</h2>

                        <h3 class="font-weight-bold text-success mb-4"> Your Search Result: {{ request()->search }}
                            matched with {{ $packages->count() }} Package !</h3>



        </div>
        <div class="pack-row row">




            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @if ($packages->count() > 0)

            </div>






            @foreach ($packages as $package)

            <div class="col-md-4">
                <div class="pac-col">
                    <img src="{{asset($package->image)}}" alt="">
                    <div class="packdetail">
                        <h4>{{$package->startingpoint}} ⬌ {{$package->destination}}</h4>
                        <div class="daydet">
                            <span><i class="far fa-calendar"></i> {{ date('d M, Y', strtotime($package->pickupdate)) }} at {{ date('h:i A', strtotime($package->pickupdate)) }}</span>
                            <br>
                            <span><i class="far fa-clock"></i> {{$package->duration}} </span>
                            <b>{{$package->price}} BDT</b>
                        </div>
                        <div class="eview-row row no-margin">
                            <ul>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @else
        <h2 class="font-weight-bold text-danger mb-4">No Package found!!!</h2>
        @endif

    </div>
</section>


@endsection --}}


@extends('Frontend.master')

@section('content')
<br> <br> <br> <br>
<section class="top-packages container-fluid">
    <div class="container">
        <div class="session-title row">
            <h2>Top Packages</h2>
            {{-- @if (request()->has('search'))
                <h3 class="font-weight-bold text-success mb-4">
                    Your Search Result: {{ request()->search }} matched with {{ $packages->count() }} Package(s)!
                </h3>
            @endif --}}
        </div>
        <div class="pack-row row">
            {{-- @if ($packages->count() > 0) --}}
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($packages as $package)
                        <div class="col-md-4">
                            <div class="pac-col">
                                <img src="{{ asset($package->image) }}" alt="">
                                <div class="packdetail">
                                    <h4>{{ $package->startingpoint }} ⬌ {{ $package->destination }}</h4>
                                    <div class="daydet">
                                        <span><i class="far fa-calendar"></i> {{ date('d M, Y', strtotime($package->pickupdate)) }} at {{ date('h:i A', strtotime($package->pickupdate)) }}</span>
                                        <br>
                                        <span><i class="far fa-clock"></i> {{ $package->duration }} </span>
                                        <b>{{ $package->price }} BDT</b>
                                    </div>
                                    <div class="eview-row row no-margin">
                                        <ul>
                                            @for ($i = 0; $i < 5; $i++)
                                                <li><i class="fas fa-star"></i></li>
                                            @endfor
                                        </ul>
                                    </div>
                                    <div class="text-center" >
                                        <button class="btn btn-outline-success mt-2 "><a href="{{route('singlepackage.view',$package->id)}}">View The Package</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            {{-- @else
                <h2 class="font-weight-bold text-danger mb-4">No Packages found!!!</h2>
            @endif --}}
        </div>
    </div>
</section>

@endsection
