@extends('Frontend.master')
@section('content')



<!--################### Slider Starts Here #######################--->

<div class="slider-detail">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item ">
                <img class="d-block w-100" src="/Frontend/assets/images/slider/slid_1.jpg" alt="First slide">
                <div class="carousel-caption fvgb d-none d-md-block">
                    <h5 class="animated bounceInDown"> Our Best Packages </h5>

                    <p class="animated fadeInLeft">Discover the Awesome Package tailored just for you! Immerse yourself
                        in the wonders of nature and experience its breathtaking beauty firsthand. Whether you're
                        seeking tranquil landscapes or thrilling adventures, this package has it all. Unwind, explore,
                        and create unforgettable memories amidst nature's splendor. Book now and embark on an
                        extraordinary journey!</p>

                </div>
            </div>

            <div class="carousel-item active">
                <img class="d-block w-100" src="/Frontend/assets/images/slider/slid_1.jpg" alt="Third slide">
                <div class="carousel-caption vdg-cur d-none d-md-block">
                    <h5 class="animated bounceInDown">Tourism Management System</h5>
                    <p class="animated bounceInLeft">Welcome to our Tourism Management System website! We're here to
                        make your travel experience exceptional. Whether it's exploring breathtaking destinations or
                        planning your dream getaway, we've got you covered. With our user-friendly platform, you can
                        easily discover exciting travel options and book your next adventure hassle-free. Join us today
                        and embark on unforgettable journeys!</p>


                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>





    <!--################### Packages Starts Here #######################--->

    <section class="top-packages container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Best Packages</h2>
                <p>TMS are provide the best packages for you.</p>
            </div>
            <div class="pack-row row">

                @foreach ($packages as $package)

                <div class="col-md-4">
                    <div class="pac-col">
                        <img src="{{asset($package->image)}}" alt="">
                        <div class="packdetail">
                            <h4>{{$package->startingpoint}} ⬌ {{$package->destination}}</h4>
                            <div class="daydet">
                                <span><i class="far fa-calendar"></i> {{ date('d M, Y', strtotime($package->pickupdate))
                                    }} at {{ date('h:i A', strtotime($package->pickupdate)) }}</span>
                                <br>
                                <span><i class="far fa-clock"></i> {{$package->duration}} </span>

                                <b>{{$package->price}} BDT</b>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-success mt-2 "><a
                                        href="{{route('singlepackage.view',$package->id)}}">More Details</a></button>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
















    <!-- ******************** Travel Destination Starts Here ******************* -->

    <div class="travel-destination container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>Popular Destination</h2>
                <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella
                    wolf moon beard words.</p>
            </div>
            <div class="destination-row row">
                <div class="col-md-3 descol">
                    <div class="destcol">
                        <img src="/Frontend/assets/images/destination/d1.jpg" alt="">
                        <div class="layycover">
                            <h4>Brazil <span class="badge badge-info">5 Places</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 descol">
                    <div class="destcol">
                        <img src="/Frontend/assets/images/destination/d2.jpg" alt="">
                        <div class="layycover">
                            <h4>Malaysia <span class="badge badge-info">5 Places</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 descol">
                    <div class="destcol">
                        <img src="/Frontend/assets/images/destination/d3.jpg" alt="">
                        <div class="layycover">
                            <h4>Sri Lanka <span class="badge badge-info">5 Places</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 descol">
                    <div class="destcol">
                        <img src="/Frontend/assets/images/destination/d4.jpg" alt="">
                        <div class="layycover">
                            <h4>Canada <span class="badge badge-info">5 Places</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 descol">
                    <div class="destcol">
                        <img src="/Frontend/assets/images/destination/d3.jpg" alt="">
                        <div class="layycover">
                            <h4>Vietnam <span class="badge badge-info">5 Places</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 descol">
                    <div class="destcol">
                        <img src="/Frontend/assets/images/destination/d1.jpg" alt="">
                        <div class="layycover">
                            <h4>Thailand <span class="badge badge-info">5 Places</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 descol">
                    <div class="destcol">
                        <img src="/Frontend/assets/images/destination/d3.jpg" alt="">
                        <div class="layycover">
                            <h4>Thailand <span class="badge badge-info">5 Places</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 descol">
                    <div class="destcol">
                        <img src="/Frontend/assets/images/destination/d4.jpg" alt="">
                        <div class="layycover">
                            <h4>Thailand <span class="badge badge-info">5 Places</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="copy">
        <div class="container">
            <a href="https://www.facebook.com/shifat.shifat.14418101">2024 &copy; All Rights Reserved | Travel Management System | Md.
                Shahriar Kabir</a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>

    @endsection
