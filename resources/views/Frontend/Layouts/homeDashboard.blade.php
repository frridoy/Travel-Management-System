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
                    <h5 class="animated bounceInDown">Package </h5>
                    <p class="animated fadeInLeft">awesomepackage <br>
                       for you<br>
                       natural beauty</p>

                    <div class="row vbh">

                        <div class="btn btn-primary animated bounceInUp"> Apply Online </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <img class="d-block w-100" src="/Frontend/assets/images/slider/slid_2.jpg" alt="Third slide">
                <div class="carousel-caption vdg-cur d-none d-md-block">
                    <h5 class="animated bounceInDown">Best Free Educational Template</h5>
                    <p class="animated bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                        aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                        sed sagittis at, sagittis quis neque. Praesent.</p>

                    <div class="row vbh">

                        <div class="btn btn-primary animated bounceInUp"> Apply Online </div>
                    </div>
                </div>
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

 <!--################### Offers Starts Here #######################--->

<div class="lloking-for container-fluid">
    <div class="inn-lay">
        <div class="container">
            <div class="row">
                <div class="col-md-10 natur-col mx-auto">
                    <h2>Up to 40% Discount on Selected Packages</h2>
                    <h4 class="pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</h4>
                    <button class="btn btn-light">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!--  ************************* Blog Starts Here ************************** -->
<div class="blog">

    <div class="container">
        <div class="row session-title">
            <h2>Our Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row blog-row">
            <div class="col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="/Frontend/assets/images/blog/blog1.jpg" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Curabit finibus dui sem.</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="/Frontend/assets/images/blog/blog2.jpg" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Excepteur sint occaecat</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="/Frontend/assets/images/blog/blog3.jpg" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Treatmnkl sint occaecat</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="blog-singe no-margin row">
                    <div class="col-sm-5 blog-img-tab">
                        <img src="/Frontend/assets/images/blog/blog4.jpg" alt="">
                    </div>
                    <div class="col-sm-7 blog-content-tab">
                        <h2>Orcidinodal sint occaecat</h2>
                        <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                        <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                        <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


 <!-- ******************** Travel Destination Starts Here ******************* -->

<div class="travel-destination container-fluid">
    <div class="container">
        <div class="session-title">
            <h2>Popular Destination</h2>
            <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
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



@endsection
