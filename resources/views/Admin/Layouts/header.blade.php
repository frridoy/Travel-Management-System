<header class="header">
    
    <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a
            class="sidebar-toggler text-gray-500 me-4 me-lg-5 lead" href="#"><i class="fas fa-align-left"></i></a><a
            class="navbar-brand fw-bold text-uppercase text-base" href=""><span
                class="d-none d-brand-partial">Admin </span><span class="d-none d-sm-inline">Dashboard</span></a>
        <ul class="ms-auto d-flex align-items-center list-unstyled mb-0">
            <li class="nav-item dropdown">
                <form class="ms-auto me-4 d-none d-lg-block" id="searchForm">
                    <div class="input-group input-group-sm input-group-navbar">
                        <input class="form-control" id="searchInput" type="search" placeholder="Search">
                        <button class="btn" type="button"> <i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="dropdown-menu dropdown-menu-animated text-sm" id="searchDropdownMenu">
                    <h6 class="dropdown-header text-uppercase fw-normal">Recent pages</h6><a
                        class="dropdown-item py-1" href="cms-post.html"> <i class="far fa-file me-2">
                        </i>Posts</a><a class="dropdown-item py-1" href="widgets-stats.html"> <i
                            class="far fa-file me-2"> </i>Widgets</a><a class="dropdown-item py-1"
                        href="pages-profile.html"> <i class="far fa-file me-2"> </i>Profile</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header text-uppercase fw-normal">Users</h6><a class="dropdown-item py-1"
                        href="pages-profile.html"> <img class="avatar avatar-xs p-1 me-2"
                            src="https://d19m59y37dris4.cloudfront.net/bubbly/1-3-2/img/avatar-0.jpg"
                            alt="Md. Shahriar Kabir"><span>Md. Shahriar Kabir</span></a><a class="dropdown-item py-1"
                        href="pages-profile.html"> <img class="avatar avatar-xs p-1 me-2"
                            src="https://d19m59y37dris4.cloudfront.net/bubbly/1-3-2/img/avatar-1.jpg"
                            alt="Md. Shahriar Kabir"><span>Md. Shahriar Kabir</span></a><a class="dropdown-item py-1"
                        href="pages-profile.html"> <img class="avatar avatar-xs p-1 me-2"
                            src="https://d19m59y37dris4.cloudfront.net/bubbly/1-3-2/img/avatar-2.jpg"
                            alt="Md. Shahriar Kabir"><span>Md. Shahriar Kabir</span></a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header text-uppercase fw-normal">Filters</h6><a class="dropdown-item py-1"
                        href="#!"> <span class="badge me-2 badge-success-light">Posts</span><span
                            class="text-xs">Search all posts</span></a><a class="dropdown-item py-1" href="#!">
                        <span class="badge me-2 badge-danger-light">Users</span><span class="text-xs">Only in
                            users</span></a><a class="dropdown-item py-1" href="#!"> <span
                            class="badge me-2 badge-warning-light">Campaigns</span><span class="text-xs">Only in
                            campaigns</span></a>
                </div>
            </li>
            <li class="nav-item dropdown me-2"><a class="nav-link nav-link-icon text-gray-400 px-1"
                    id="notifications" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <svg class="svg-icon svg-icon-md svg-icon-heavy">
                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#sales-up-1"> </use>
                    </svg><span class="notification-badge bg-green"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated text-sm"
                    aria-labelledby="notifications"><a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-sm bg-indigo text-white"><i class="fab fa-twitter"></i></div>
                            <div class="text ms-2">
                                <p class="mb-0">You have 2 followers</p>
                            </div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
                            <div class="text ms-2">
                                <p class="mb-0">You have 6 new messages</p>
                            </div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-sm bg-blue text-white"><i class="fas fa-upload"></i></div>
                            <div class="text ms-2">
                                <p class="mb-0">Server rebooted</p>
                            </div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-sm bg-indigo text-white"><i class="fab fa-twitter"></i></div>
                            <div class="text ms-2">
                                <p class="mb-0">You have 2 followers</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-center" href="#"><small
                            class="fw-bold text-uppercase">View all notifications</small></a>
                </div>
            </li>
            <!-- Messages                        -->
            <li class="nav-item dropdown me-2 me-lg-3"> <a class="nav-link nav-link-icon text-gray-400 px-1"
                    id="messages" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="svg-icon svg-icon-md svg-icon-heavy">
                        <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#paper-plane-1"> </use>
                    </svg><span class="notification-badge notification-badge-number bg-primary">10</span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated text-sm"
                    aria-labelledby="messages"><a class="dropdown-item d-flex align-items-center p-3" href="#"> <img
                            class="avatar avatar-sm p-1 me-2"
                            src="https://d19m59y37dris4.cloudfront.net/bubbly/1-3-2/img/avatar-0.jpg"
                            alt="Md. Shahriar Kabir">
                        <div class="pt-1">
                            <h6 class="fw-bold mb-0">Md. Shahriar Kabir</h6><span class="text-muted text-sm">Sent you a
                                message</span>
                        </div>
                    </a><a class="dropdown-item d-flex align-items-center p-3" href="#"> <img
                            class="avatar avatar-sm p-1 me-2"
                            src="https://d19m59y37dris4.cloudfront.net/bubbly/1-3-2/img/avatar-1.jpg"
                            alt="Md. Shahriar Kabir">
                        <div class="pt-1">
                            <h6 class="fw-bold mb-0">Md. Shahriar Kabir</h6><span class="text-muted text-sm">Sent you a
                                message</span>
                        </div>
                    </a><a class="dropdown-item d-flex align-items-center p-3" href="#"> <img
                            class="avatar avatar-sm p-1 me-2"
                            src="https://d19m59y37dris4.cloudfront.net/bubbly/1-3-2/img/avatar-2.jpg"
                            alt="Md. Shahriar Kabir">
                        <div class="pt-1">
                            <h6 class="fw-bold mb-0">Md. Shahriar Kabir</h6><span class="text-muted text-sm">Sent you a
                                message</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-center" href="#"> <small
                            class="fw-bold text-uppercase">View all messages </small></a>
                </div>
            </li>
            <li class="nav-item dropdown ms-auto"><a class="nav-link pe-0" id="userInfo" href="#"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar p-1"
                        src="https://d19m59y37dris4.cloudfront.net/bubbly/1-3-2/img/avatar-6.jpg"
                        alt="Jason Doe"></a>
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
