@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-6 col-md-2">

            <div class="card card_category ml-2 mt-3">
                <div class="card-body card_body_custom">
                    <h5 class="card-title category_heading ">{{$category_name->name}}</h5>
                    <div>
                        <div>
                            @for($i = 0; $i < count($categories); $i ++ )
                                @foreach($categories as $categor)
                                    @foreach($categor as $category)
                                        {{--                                        {{dd($category)}}--}}
                                        <a href="{{route('user.category.view',[$category->name])}}">
                                            <button class="button_category" value=""> {{$category->name}}</button>
                                        </a>
                                    @endforeach
                                @endforeach
                            @endfor
                        </div>
                        @if(count($brands) !=0)


                            <h3 class="category_name_brands">Brands</h3>
                            <div>
                                @foreach($brands as $brand)

                                    <a href="#">
                                        <button class="button_accordion" value=""> {{$brand->name}}</button>
                                    </a>
                                @endforeach

                            </div>
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
                                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                                        <li class="breadcrumb-item active"><a href="#">{{$category_name->name}}</a></li>
                                        {{--                                        <li class="breadcrumb-item active" aria-cur?rent="page">Data</li>--}}
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                    @foreach($brands as $product)



                        <div class="col-lg-2 col-sm-2">
                            <div class="carding">
                                <div class="carding__side carding__side--front">
                                    <div class="carding__picture">
                                        <a href="{{url('user/details',['id'=>$product->product_detail->id])}}">
                                            <img class=" carding__image"
                                                 src="{{asset('/products/images/featured/'.$product->product_detail->featured_image_url)}}"
                                                 alt="Card image cap">
                                        </a>
                                    </div>
                                    <div>
                                        <p class="product_name">{{ strlen($product->product_detail->name) > 30 ? substr($product->product_detail->name,0,30).'...' : $product->product_detail->name }}</p>

                                    </div>
                                    <div class="star_custom ml-auto">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="carding__details ">
                                        <div class="d-flex mb-2">
                                            @if(count($offers) != 0)


                                                @foreach($offers as $offer)

{{--                                                    {{dd($offer)}}--}}

                                                @if($offer !=null)

                                                    @if($offer->product_id == $product->product_detail->id)
                                                        <div class="d-flex">
                                                            <h6 class="mr-2">
                                                                KShs</h6> {{($product->product_detail->unit_cost)-($offer->discount *$product->product_detail->unit_cost )/100}}

                                                        </div>

                                                        <div class="details_card_prices ">
                                                            kShs {{$product->product_detail->unit_cost}}
                                                        </div>

                                                    @else


                                                        <div class="d-flex mb-3">
                                                            <h6 class="mr-2">
                                                                KShs</h6>{{$product->product_detail->unit_cost}}
                                                        </div>

                                                    @endif

                                                    @else
                                                    @endif
                                                @endforeach
                                            @else
                                                <span class="mr-1  ">KShs</span>

                                                <span class="carding__details--spanamount">{{$product->product_detail->unit_cost}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="carding__discount">

                                    </div>
                                </div>


                            </div>

                        </div>

                    @endforeach
                    {{--                    <div class="col-lg-2 col-sm-2">--}}
                    {{--                        <div class="cardings">--}}
                    {{--                            <div class="cardings__side cardings__side--front">--}}
                    {{--                                <div class="">--}}
                    {{--                                    <a href="#">--}}
                    {{--                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="col-lg-2 col-sm-2">--}}
                    {{--                        <div class="cardings">--}}
                    {{--                            <div class="cardings__side cardings__side--front">--}}
                    {{--                                <div class="">--}}
                    {{--                                    <a href="#">--}}
                    {{--                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}


                    {{--                    <div class="col-lg-2 col-sm-2">--}}
                    {{--                        <div class="cardings">--}}
                    {{--                            <div class="cardings__side cardings__side--front">--}}
                    {{--                                <div class="">--}}
                    {{--                                    <a href="#">--}}
                    {{--                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-2 col-sm-2">--}}
                    {{--                        <div class="cardings">--}}
                    {{--                            <div class="cardings__side cardings__side--front">--}}
                    {{--                                <div class="">--}}
                    {{--                                    <a href="#">--}}
                    {{--                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="col-lg-2 col-sm-2">--}}
                    {{--                        <div class="cardings">--}}
                    {{--                            <div class="cardings__side cardings__side--front">--}}
                    {{--                                <div class="">--}}
                    {{--                                    <a href="#">--}}
                    {{--                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}


                    {{--                    <div class="col-lg-2 col-sm-2">--}}
                    {{--                        <div class="cardings">--}}
                    {{--                            <div class="cardings__side cardings__side--front">--}}
                    {{--                                <div class="">--}}
                    {{--                                    <a href="#">--}}
                    {{--                                        <img src="{{asset('images/L1.jpg')}}" alt="" class="product_category_class">--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    @include('assets.footer.footer')

@endsection