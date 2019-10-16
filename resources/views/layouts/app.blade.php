        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/dropdown.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">


    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet">

    <link href="{{ asset('slider/css/custom.css')}}" rel="stylesheet">

    @yield('css')



</head>
<body>
<div id="app">
    @include('assets.header')


    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top header_nav" id="navbar">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{--        <div class="container-fluid">--}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ml-auto ">


                <li class="nav-item mt-3">
                    <form class="form-inline form_border search">

                        <input class="form-control mr-sm-2 " type="search" placeholder="Search For Products"
                               aria-label="Search">

                        <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </li>

                <li class="nav-item">
                    @if(\Illuminate\Support\Facades\Auth::user() == null)

                        <a class="nav-link" href="{{route('seller.login')}}" title="Create New Seller">New Store</a>
                    @else
                        <a class="nav-link" onclick="return false;" title="Logout as Buyer First To Create Account">New
                            Store</a>

                    @endif
                </li>
                <li class="nav-item mt-2 mr-5 pl-4">
                    <a href="{{route('user.wishlist.view')}}"> <i class="fas fa-heart fa-2x"></i></a>
                </li>


                @if(\Illuminate\Support\Facades\Auth::user() == null)
                    <div class="wishlist_sup_heart">
                    </div>
                @else
                    <div class="wishlist_sup_heart">
                        {{$wishlist_count}}
                    </div>
                @endif

                <li class="nav-item mt-2 ml-5">
                    <a href="{{route('user.cart.view')}}"><i class="fas fa-cart-plus fa-2x"></i></a>

                @if(\Illuminate\Support\Facades\Auth::user() ==null)
                    <div class="wishlist_sup">
                    </div>
                @else
                    <div class="wishlist_sup">
                        {{$cart_count}}
                    </div>
                @endif
                </li>

            </ul>

            <!-- Right Side Of Navbar -->


            <ul class="navbar-nav ml-auto">


                <div class="nav-item dropdowns">
                    <i class="far fa-user fa-2x"></i>

                    <div class="dropdown_content_login">
                        <div class="category_hover">


                        </div>


                        @guest
                            <a href="{{route('login')}}">Login</a>


                            <a href="{{ route('register') }}">Create Account</a>

                        @else


                            <li class=" dropdown user_logout">


                                <a class="dropdown-item " href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{csrf_field()}}
                                </form>


                            </li>
                        @endguest


                    </div>
                </div>


            </ul>
        </div>
    </nav>


    @yield('content')

</div>





</body>

@yield('js')
<script src="{{asset('js/mine.js')}}"></script>
<script src="{{asset('font/js/all.js')}}"></script>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>


<script src="https://kit.fontawesome.com/40f4086384.js"></script>

</html>
