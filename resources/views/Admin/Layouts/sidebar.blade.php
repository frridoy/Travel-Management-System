<div class="sidebar py-3" id="sidebar">
    <h6 class="sidebar-heading">Admin Dashboard</h6>
    <ul class="list-unstyled">
        <li class="sidebar-list-item">
            <a class="sidebar-link text-muted" href="#" data-bs-target="#packageDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
                </svg>
                <span class="sidebar-link-title">Package </span>
            </a>
            <ul class="sidebar-menu list-unstyled collapse" id="packageDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted create" href="{{route('package.create')}}">Package- Create</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('package.list')}}">Package- List</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('package.trash')}}">Package- Trash List</a></li>
            </ul>
        </li>

        <li class="sidebar-list-item">
            <a class="sidebar-link text-muted" href="#" data-bs-target="#hotelDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
                </svg>
                <span class="sidebar-link-title">Hotel </span>
            </a>
            <ul class="sidebar-menu list-unstyled collapse" id="hotelDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted create" href="{{route('hotel.create')}}">Hotel- Create</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('hotel.list')}}">Hotel- List</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted warning" href="{{route('hotel.trash')}}">Hotel- Trash List</a></li>
            </ul>
        </li>

        <li class="sidebar-list-item">
            <a class="sidebar-link text-muted" href="#" data-bs-target="#transportDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
                </svg>
                <span class="sidebar-link-title">Transport </span>
            </a>
            <ul class="sidebar-menu list-unstyled collapse" id="transportDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted create" href="{{route('transport.create')}}">Transport- Create</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('transport.list')}}">Transport- List</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('transport.trash')}}">Transport- Trash List</a></li>
            </ul>
        </li>

        <li class="sidebar-list-item">
            <a class="sidebar-link text-muted" href="#" data-bs-target="#destinationDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
                </svg>
                <span class="sidebar-link-title">Destination </span>
            </a>
            <ul class="sidebar-menu list-unstyled collapse" id="destinationDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted create" href="{{route('destination.create')}}">Destination- Create</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('destination.list')}}">Destination- List</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('destination.trash')}}">Destination- Trash List</a></li>
            </ul>
        </li>
        <li class="sidebar-list-item">
            <a class="sidebar-link text-muted" href="#" data-bs-target="#userroleDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
                </svg>
                <span class="sidebar-link-title">User Role </span>
            </a>
            <ul class="sidebar-menu list-unstyled collapse" id="userroleDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted create" href="{{route('user_role.create')}}">User Role- Create</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('user_role.list')}}">Users- List</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="">User- Trash List</a></li>
            </ul>
        </li>

        <li class="sidebar-list-item">
            <a class="sidebar-link text-muted" href="#" data-bs-target="#bookingDropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-md me-3">
                    <use xlink:href="icons/orion-svg-sprite.71e9f5f2.svg#design-1"> </use>
                </svg>
                <span class="sidebar-link-title">Booking</span>
            </a>
            <ul class="sidebar-menu list-unstyled collapse" id="bookingDropdown">
                <li class="sidebar-list-item"><a class="sidebar-link text-muted create" href="{{route('bookings.list')}}">List</a></li>
                {{-- <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="{{route('user_role.list')}}">Users- List</a></li>
                <li class="sidebar-list-item"><a class="sidebar-link text-muted list" href="">User- Trash List</a></li> --}}
            </ul>
        </li>

    </ul>

</div>

