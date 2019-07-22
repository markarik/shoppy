{{--

    <div class="header">

            <div class="row bg-dark">
                <div class="col-md-5 ">
                    <div class="logo">
                        <a href="#"> <img src="{{asset('shoppy.png')}}" width="80" height="50" alt=""></a>
                    </div>
                    <div class="col-md-2 pull-right">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="{{url('#')}}" class="dropdown-toggle" data-toggle="dropdown">l<b
                                                    class="caret"></b></a>
                                        <ul class="dropdown-menu animated fadeInUp">
                                            <li><a href="{{url('/')}}">Front End</a></li>
                                            <li><a href="{{url('/logout')}}">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

        </div>
    </div>
--}}


{{--
<nav class="navbar navbar-expand-sm navbar-dark navbar_modify pl-5 sticky-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
        <img src="{{asset('images/shoppy.png')}}" alt="logo" width="90" height="40">
    </a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto pl-4">
        --}}
{{-- <li class="nav-item">
             <a class="nav-link" href="#">Link 1</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="#">Link 2</a>
         </li>--}}{{--

        <li class="navbar-nav ">
          --}}
{{--  <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MARK
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>

            </div>--}}{{--

            <ul class="nav-item">one</ul>
            <ul class="nav-item">one</ul>
            <ul class="nav-item">one</ul>
            <ul class="nav-item">one</ul>
        </li>
    </ul>
</nav>
--}}

<nav class="navbar  bg-light top-nav">
    <a class="navbar-brand" href="#">

        <img src="{{asset('images/shoppy.png')}}"  class="d-inline-block align-top logo" alt="">
    </a>
    <div class=" social d-flex">
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="far fa-envelope"></i></a>
        </div>
    </div>
</nav>

