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
                 <div id="menu" class="navs d-none d-md-block col-md-9">
                     <ul>
                         <li><a href="{{route('home')}}">Home</a></li>
                         <li><a href="{{route('about.us')}}">About Us</a></li>
                         <li><a href="{{route('our.packages')}}">Packages</a></li>
                         <li><a href="destination.html">Destinations</a></li>
                         <li><a href="blog.html">Blog</a></li>
                         <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
</header>
