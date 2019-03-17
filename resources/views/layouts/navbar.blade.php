<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">
        <img src="{{url("/img/front/delivrlogo.svg") }}" height="30" alt="mdb logo"> DeliVR
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{ url("/") }}">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            @if(auth()->check())

                @if(auth()->user()->user_type == "truck_owner")
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{ url("/truck-dashboard") }}">Truck Dashboard</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{ url("/add-trucks") }}">Add Trucks</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{ url("/view-loads") }}">View Loads</a>
                    </li>
                    @elseif(auth()->user()->user_type == "loader")
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{ url("/load-dashboard") }}">Load Dashboard</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{ url("/add-loads") }}">Add Loads</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{ url("/view-trucks") }}">View Trucks</a>
                    </li>
                    @endif
                @else
            <li class="nav-item ml-4">
                <a class="nav-link" href="{{ url("/login") }}">Login</a>
            </li>

            <li class="nav-item ml-4">
                <a class="nav-link" href=" {{ url("/register") }}">Register</a>
            </li>
                @endif

        </ul>
        @if(auth()->check())
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="{{ url("/user-profile") }}">User Profile</a>
                    <a class="dropdown-item" href="{{ url("/logout") }}">Logout</a>
                </div>
            </li>
        </ul>
        @endif
        <!-- Links -->

    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->