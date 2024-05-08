<header class="header">

    {{-- <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"> --}}
        <nav class="navbar navbar-expand-lg px-4 py-2 bg-red shadow">





        <a class="navbar-brand fw-bold text-uppercase text-black" href="{{route('dashboard')}}">
            <span class="d-none d-brand-partial">Admin </span><span class="d-none d-sm-inline">Panel</span></a>
        <ul class="ms-auto d-flex align-items-center list-unstyled mb-0">
            <li class="nav-item dropdown">
                {{-- <form action="{{route('bookings.search')}}" method="GET" class="ms-auto me-4 d-none d-lg-block" id="searchForm">
                    <div class="input-group input-group-sm input-group-navbar">
                        <input class="form-control" id="searchInput" name="search" type="search" placeholder="Search Booking...">
                        <button class="btn" type="button"> <i class="fas fa-search"></i></button>
                    </div>
                </form> --}}
                <form action="{{ route('bookings.search') }}" method="GET" class="ms-auto me-5 d-none d-lg-block" id="searchForm">
                    <div class="input-group input-group-sm input-group-navbar">
                        <input class="form-control" id="searchInput" name="search" type="search" placeholder="Search Booking..." style="border-color: #4CAF50; color: #4CAF50; border-radius: 200px; background-color: #f2f2f2;">
                        <button class="btn" type="button" style="background-color: #4CAF50; color: white; border: none; border-radius: 200px;"> <i class="fas fa-search"></i></button>
                    </div>
                </form>



            </li>

            <li class="nav-item dropdown ms-auto"><a class="nav-link pe-0" id="userInfo" href="#"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar p-1"
                        src="{{asset('assests/shahriar-kabir.jpg')}}"
                        alt="Shahriar Kabir"></a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated" aria-labelledby="userInfo">
                    <div class="dropdown-header text-gray-700">
                        <h6 class="text-uppercase font-weight-bold">Md. Shahriar Kabir</h6><small>Web Developer</small>
                    </div>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Profile<a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
