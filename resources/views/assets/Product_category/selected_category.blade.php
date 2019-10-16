@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-6 col-md-2">


            <div class="card card_category ml-2 mt-3" >
                <div class="card-body card_body_custom">
                    <h5 class="card-title category_heading category_name">{{$category_name->name}}</h5>


                    <div>

                        @if(count($brands) !=0)
                            @foreach($brands as $brand)
                                <a href="#">
                                    <button class="  button_category" value=""> {{$brand->name}}</button>
                                </a>
                            @endforeach
                        @else

                        @endif
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-10 product_select_category">
            @include('assets.Product_category.product_nav')
            <div class="col-sm-12">
                <div class="row">
                    <div class="breadcrumb category_breadcrumbs">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <ol class="breadcrumb breadcrumb_list">
                                        <li class="breadcrumb-item"><a href="#">{{$category_name->name}}</a></li>
                                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row mt-3 mr-2">
                    <div class="col-lg-2 col-sm-2">
                        <div class="cardings">
                            <div class="cardings__side cardings__side--front">
                                <div class="">
                                    <a href="#">
                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-2">
                        <div class="cardings">
                            <div class="cardings__side cardings__side--front">
                                <div class="">
                                    <a href="#">

                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <div class="cardings">
                            <div class="cardings__side cardings__side--front">
                                <div class="">
                                    <a href="#">
                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-2">
                        <div class="cardings">
                            <div class="cardings__side cardings__side--front">
                                <div class="">
                                    <a href="#">
                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-sm-2">
                        <div class="cardings">
                            <div class="cardings__side cardings__side--front">
                                <div class="">
                                    <a href="#">
                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <div class="cardings">
                            <div class="cardings__side cardings__side--front">
                                <div class="">
                                    <a href="#">
                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-2">
                        <div class="cardings">
                            <div class="cardings__side cardings__side--front">
                                <div class="">
                                    <a href="#">
                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-sm-2">
                        <div class="cardings">
                            <div class="cardings__side cardings__side--front">
                                <div class="">
                                    <a href="#">
                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('assets.footer.footer')

@endsection