
<nav class="navbar navbar-expand-sm navbar-dark navbar_modify pl-5">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="{{asset('images/shoppy.png')}}" alt="logo" width="90" height="40">
    </a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto pl-4">
       {{-- <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>--}}
        <li class="nav-item dropdown ">
            <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MARK
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>

            </div>
        </li>
    </ul>
</nav>
