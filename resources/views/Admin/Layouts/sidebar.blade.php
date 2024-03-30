<div class="sidebar py-3" id="sidebar">
    <h6 class="sidebar-heading">Admin Dashboard</h6>
    <ul class="list-unstyled">


        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#cssDropdown"
            role="button" aria-expanded="false" data-bs-toggle="collapse">
            <svg class="svg-icon svg-icon-md me-3">
                <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
            </svg><span class="sidebar-link-title">Package </span></a>
        <ul class="sidebar-menu list-unstyled collapse " id="cssDropdown">
            <li class="sidebar-list-item"><a class="sidebar-link text-muted"
                    href="{{route('package.create')}}">Package Create</a></li>
            <li class="sidebar-list-item"><a class="sidebar-link text-muted"
                    href="{{route('package.list')}}">Package List</a></li>
        </ul>
    </li>


        <li class="sidebar-list-item"><a class="sidebar-link text-muted " href="#" data-bs-target="#cssDropdown"
                role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
                </svg><span class="sidebar-link-title">Hotel </span></a>
            <ul class="sidebar-menu list-unstyled collapse " id="cssDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted"
                        href="{{route('hotel.create')}}">Hotel Create</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted"
                        href="{{route('hotel.list')}}">Hotel List</a></li>
            </ul>
        </li>
    </ul>

</div>
