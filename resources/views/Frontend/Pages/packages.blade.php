@extends('Frontend.master')
@section('content')
<br> <br>
     <!--################### Packages Starts Here #######################--->
     <section class="top-packages container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Top Packages</h2>
                <p>There are many variations of passages of Lorem Ipsum available form</p>
            </div>
            <div class="pack-row row">

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
                            <div class="text-center" >
                                <button class="btn btn-outline-success mt-2 "><a href="{{route('singlepackage.view',$package->id)}}">View The Package</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection
