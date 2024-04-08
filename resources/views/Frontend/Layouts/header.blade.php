<header class="container-fluid">
    <div class="header-top">


    </div>
    <div id="menu-jk" class="header-bottom">
         <div class="container">
             <div class="row">
                 <div class="logo col-md-3">
                     <img src="/Frontend/assets/images/logo.png" alt="">
                     <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
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
