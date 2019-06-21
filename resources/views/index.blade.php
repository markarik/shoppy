@extends('layouts.master')
@section('title')

    Shoppy

@endsection
@section('content')
    <div class="mx-0 pd-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light  nav_customize">
            <a class="navbar-brand nav_logo" href="#"> <img src="{{asset('shoppy.png')}}" width="80" height="50" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto pr-5 item-align">
                    <li class="nav-item ">
                        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Delivery Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Payments</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
@endsection