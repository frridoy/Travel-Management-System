<header class="container-fluid">
    <div class="header-top">


    </div>
    <div id="menu-jk" class="header-bottom">
         <div class="container">
             <div class="row">

                 <div class="container mt-4 col-md-2 justify-content-end mr-0 p-0 m-0 mb-4">
                    <div class="row justify-content-end">
                        <div class="col-md-14">
                            <form action="{{route('package.search')}}" method="get" class="form-inline">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Packages..."
                                        name="search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-success">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                 {{-- <div id="menu" class="navs d-none d-md-block col-md-9">
                     <ul>
                         <li><a href="{{route('home')}}">Home</a></li>
                         <li><a href="{{route('about.us')}}">About Us</a></li>
                         <li><a href="{{route('our.packages')}}">Packages</a></li>
                         <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                         <li><a href="{{route('quick.responce')}}">Inquires</a></li>
                         @guest
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('registration') }}">Registration</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('tourist.login') }}">Login</a>
                    </li>
                    @endguest

                    @auth
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('tourist.logout') }}">Logout</a>
                    </li>
                    @endauth
                     </ul>
                 </div> --}}
                 {{-- <div id="menu" class="navs d-none d-md-block col-md-9">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about.us')}}">About Us</a></li>
                        <li><a href="{{route('our.packages')}}">Packages</a></li>
                        <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                        <li><a href="{{route('quick.responce')}}">Inquiries</a></li>

                        <!-- Profile Icon with Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> <!-- Assuming you're using Font Awesome for icons -->
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                @guest
                                    <a class="dropdown-item" href="{{ route('registration') }}">Registration</a>
                                    <a class="dropdown-item" href="{{ route('tourist.login') }}">Login</a>
                                @endguest
                                @auth
                                    <a class="dropdown-item" href="{{ route('tourist.logout') }}">Logout</a>
                                @endauth
                            </div>
                        </li>
                    </ul>
                </div> --}}
                <div id="menu" class="navs d-none d-md-block col-md-9">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about.us')}}">About Us</a></li>
                        <li><a href="{{route('our.packages')}}">Packages</a></li>
                        <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                        <li><a href="{{route('quick.responce')}}">Inquiries</a></li>

                        <!-- Profile Icon with Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle fa-lg"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                @guest
                                    <a class="dropdown-item" href="{{ route('registration') }}">Registration</a>
                                    <a class="dropdown-item" href="{{ route('tourist.login') }}">Login</a>
                                @endguest

                                @auth
                                    <a class="dropdown-item" href="{{ route('tourist.profile') }}">My Profile</a>
                                    <a class="dropdown-item" href="{{ route('tourist.logout') }}">Logout</a>

                                    <a class="dropdown-item" href="{{ route('tourist.booking', auth()->user()->id) }}">My Booking</a>

                                @endauth
                            </div>
                        </li>
                    </ul>
                </div>

             </div>
         </div>
     </div>
</header>
