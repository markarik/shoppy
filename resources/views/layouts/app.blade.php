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


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mine.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">

    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet">



</head>
<body>
    <div id="app">

        @include('assets.header')
{{--        @include('assets.header2')--}}

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container-fluid">
                {{--<a class="navbar-brand" href="{{ url('/') }}">
                    <a href="#"> <img src="{{asset('images/shoppy.png')}}" width="80" height="50" alt=""></a>
                </a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="nav-item ">
                        <a class="nav-link " href="#">  <i class="fas fa-bars ml-5 mt-3" id="dropdown"></i></a>
                    </div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">


                        <li class="nav-item mt-3">
                            <form class="form-inline form_border search">

                                <input class="form-control mr-sm-2 " type="search" placeholder="Search For Products" aria-label="Search">

                                <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </li>
                        {{--<li class="nav-item">
                            <a class="nav-link" href="{{route('admin.login')}}">Admin</a>
                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#">New Store</a>
                        </li>
                        <li class="nav-item mt-3 mr-5 pl-4">
                            <i class="fas fa-heart fa-2x"></i>
                        </li>
                        <li class="nav-item mt-3 ml-5">
                            <a href="{{route('user.cart')}}"><i class="fas fa-cart-plus fa-2x"></i></a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a href="{{route('login')}}" ><i class="far fa-user fa-2x"></i></a>
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{--{{ Auth::user()->name }}--}}mark <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>



                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



            @yield('content')

    </div>


</body>



<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('font/js/all.js')}}"></script>


<script src="https://kit.fontawesome.com/40f4086384.js"></script>
</html>
