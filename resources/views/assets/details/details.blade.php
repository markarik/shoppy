@extends('layouts.app')

@section('title')

    Details

@endsection

@section('content')
    @include('flash-message')
    {{--    <div class="container-fluid">--}}
    {{--                    @foreach($products as $product)--}}
    {{--        <div class="row details_row">--}}
    {{--            <div class="col-md-1 other_images_column imagescrollwrapper">--}}

    {{--                @foreach($extra_images as $extraimage)--}}

    {{--                    <div class="details_other_images imagescrollimg">--}}
    {{--                                                        <img src="{{asset('images/L1.jpg')}}">--}}
    {{--                        <img src="{{asset('/products/images/others/'.$extraimage->image_url)}}" class="card-img-top"--}}
    {{--                             onclick="imageSwap(this)" alt="...">--}}

    {{--                    </div>--}}


    {{--                @endforeach--}}


    {{--            </div>--}}

    {{--            <div class="col-md-3  details_custom">--}}

    {{--                <div class="details_image_custom">--}}
    {{--                    <img src="{{asset('/products/images/featured/'.$products->featured_image_url)}}"--}}
    {{--                         class="card-img-top" id="expandedImg" alt="...">--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--            <div class="col-md-4 details_custom">--}}

    {{--                <div class="details_card_custom">--}}

    {{--                    <h3 class="store_name_detail"> {{$products->name}}</h3>--}}
    {{--                </div>--}}
    {{--                <div class="">--}}
    {{--                    <nav class="nav">--}}
    {{--                        <p>Brand :</p>--}}

    {{--                        <p>--}}
    {{--                            <i>--}}
    {{--                                <h3 class="store_name_detail"> {{$products->brand_name}}</h3>--}}
    {{--                            </i>--}}
    {{--                        </p>--}}
    {{--                        --}}{{--                           <i class="fa fa-heart ml-4  details_card_heart"></i>--}}
    {{--                        <div class="nav-item ml-auto pr-5">--}}
    {{--                            @if(\Illuminate\Support\Facades\Auth::user() !=null)--}}
    {{--                                <form action="{{route('user.wishlist.store')}}" method="POST"--}}
    {{--                                      enctype="multipart/form-data" files="true">--}}
    {{--                                    {!! csrf_field() !!}--}}
    {{--                                    <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden/>--}}
    {{--                                    <input name="product_id" type="text" value="{{$products->id}}" hidden/>--}}
    {{--                                    <button class="btn"><i class="fa fa-heart"></i></button>--}}
    {{--                                </form>--}}
    {{--                            @else--}}
    {{--                                <button class="btn"><i class="fa fa-heart"></i></button>--}}

    {{--                            @endif--}}
    {{--                        </div>--}}
    {{--                    </nav>--}}
    {{--                </div>--}}
    {{--                <div class="bg">--}}
    {{--                    <nav class="nav">--}}
    {{--                        <div class="details_card_key">--}}
    {{--                            <p>Key Features</p>--}}

    {{--                        </div>--}}
    {{--                        <div class="ml-auto accordion" id="accordionExample">--}}
    {{--                            <a href="#" class="collapsed details_accordion" type="button" data-toggle="collapse"--}}
    {{--                               data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">See all--}}
    {{--                                details</a>--}}
    {{--                        </div>--}}
    {{--                    </nav>--}}
    {{--                    <p>--}}
    {{--                            {!! $products->short_description !!}--}}
    {{--                    </p>--}}


    {{--                </div>--}}
    {{--                --}}{{--                <div class="details_card_delivery">--}}

    {{--                --}}{{--                    <p class="">Delivery <a href="#">Details</a></p>--}}

    {{--                --}}{{--                </div>--}}
    {{--                <div class="bg">--}}
    {{--                    <nav class="nav">--}}


    {{--                        @if($offers != null)--}}

    {{--                            <div class="details_card_prices">--}}
    {{--                                <h6>kShs {{$products->unit_cost}}</h6>--}}
    {{--                            </div>--}}

    {{--                            <h5 class="text-blue font-italic ml-auto mr-2 ">--}}

    {{--                                kShs {{($products->unit_cost)-($offers->discount *$products->unit_cost )/100}}--}}


    {{--                            </h5>--}}
    {{--                        @else--}}

    {{--                            <div class="details_card_prices">--}}
    {{--                                <h4>kShs {{$products->unit_cost}}</h4>--}}
    {{--                            </div>--}}

    {{--                        @endif--}}

    {{--                        <div class="ml-auto details_card_button">--}}

    {{--                            @if(\Illuminate\Support\Facades\Auth::user() != null)--}}
    {{--                                <button type="button" class="btn btn-primary" data-toggle="modal"--}}
    {{--                                        data-target="#exampleModal{{$products->id}}"--}}
    {{--                                        @if($orderproductsdisabled != null)--}}
    {{--                                        disabled--}}
    {{--                                @else--}}

    {{--                                        @endif--}}
    {{--                                >--}}
    {{--                                    @if($orderproductsdisabled != null)--}}
    {{--                                        Item in Cart--}}

    {{--                                    @else--}}
    {{--                                        Add to Cart--}}

    {{--                                    @endif--}}
    {{--                                </button>--}}

    {{--                            @else--}}
    {{--                                <a href="{{url('user/cart')}}" class="btn btn-primary btn_buy_now">Add to Cart</a>--}}
    {{--                            @endif--}}

    {{--                        </div>--}}
    {{--                    </nav>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-2 details_custom">--}}
    {{--                <div><h5>Sold By?</h5></div>--}}
    {{--                <div>--}}
    {{--                    <h6 class="store_name_detail">{{$products->seller->store_name}}</h6>--}}
    {{--                </div>--}}
    {{--                <div class="hr_custom"></div>--}}
    {{--                <div>--}}
    {{--                    <h5>Delivery</h5>--}}
    {{--                    <p>--}}
    {{--                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.--}}
    {{--                        Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"--}}
    {{--                    </p>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="row">--}}
    {{--            --}}{{--            @endforeach--}}
    {{--            @include('assets.details.details_accordion')--}}
    {{--        </div>--}}
    {{--        <div class="hr_custom">--}}

    {{--        </div>--}}
    {{--        @include('assets.recently_viewed_navbar')--}}
    {{--        <div class="hr_custom"></div>--}}
    {{--        <div class="container">--}}
    {{--            @include('assets.recently_cards')--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="container-fluid">
        <div class="row" style="background-color: ghostwhite">
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-2 mt-5">
                        @foreach($extra_images as $extraimage)
                            <div class="col-sm-1 other_images_column imagescrollwrapper">

                                <div class="details_other_images imagescrollimg">
                                    <img src="{{asset('/products/images/others/'.$extraimage->image_url)}}"
                                         class="card-img-top"
                                         onclick="imageSwap(this)" alt="...">

                                </div>
                                {{--                                <div class="">--}}
                                {{--                                    <img src="{{asset('/products/images/couresels/'.$extraimage->image)}}"--}}
                                {{--                                         alt="...">--}}
                                {{--                                </div>--}}

                            </div>
                        @endforeach



                        {{--                        @endforeach   --}}
                    </div>
                    <div class="col-sm-10">
                        <div class="details_image_custom">
                            <img src="{{asset('/products/images/featured/'.$products->featured_image_url)}}"
                                 class="card-img-top" id="expandedImg" alt="...">
                        </div>
                    </div>
                </div>


                {{--                <div class="col-sm-2">--}}
                {{--                                        @foreach($products as $product)--}}


                {{--                  --}}
                {{--                </div>--}}


            </div>
            <div class="col-sm-5 details_column_div">
                <div>
                    <h3 class=""> {{$products->name}}</h3>
                </div>
                <div class="d-flex">
                    <div class="product_rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div>
                        Baseus Mini USB Car Charger For Mobile Phone Tablet GPS 3.1A
                    </div>
                </div>
                <div>
                    @if($offers != null)

                        <div class="d-flex">

                            <div class="text-blue font-italic ">

                                <h4> kShs {{($products->unit_cost)-($offers->discount *$products->unit_cost )/100}}</h4>

                            </div>
                            <div class="details_card_prices ml-3">
                                <h6>kShs {{$products->unit_cost}}</h6>
                            </div>


                        </div>
                    @else

                        <div class="">
                            <h4>kShs {{$products->unit_cost}}</h4>
                        </div>

                    @endif
                </div>
                <div>
                    {!! $products->short_description !!}

                </div>
                <div>
                    <b>Baseus Mini USB Car Charger For Mobile Phone Tablet GPS 3.1A Fast Charger Car-Charger Dual USB
                        Car
                        Phone Charger Adapter in Car</b>
                </div>

                <div class="">

                    @if($inventory->quantity != 0)

                        <small>

                            Only <span class="carding__inventory--quantity"><b>{{$inventory->quantity}}</b></span> Items
                            Available
                        </small>

                    @else

                        <small>

                            <span class="product_out_stock">Product Out of Stock</span>
                        </small>

                    @endif
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="ml-auto details_card_button">

                                @if(\Illuminate\Support\Facades\Auth::user() != null)
                                    <button type="button" class="btn  btn_buy_product" data-toggle="modal"
                                            data-target="#exampleModal{{$products->id}}"
                                            @if($orderproductsdisabled != null)
                                            disabled
                                            @elseif($inventory->quantity === 0)

                                            disabled

                                            @endif
                                    >
                                        @if($orderproductsdisabled != null)
                                            Item in Cart

                                        @else
                                            Add to Cart

                                        @endif
                                    </button>

                                @else
                                    <a href="{{url('user/cart')}}">
                                        <button class="btn  btn_buy_product"
                                                @if($inventory->quantity == 0)
                                                disabled
                                                @endif
                                        > Add to Cart
                                        </button>


                                    </a>
                                @endif

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="ml-auto">
                                @if(\Illuminate\Support\Facades\Auth::user() !=null)
                                    <form action="{{route('user.wishlist.store')}}" method="POST"
                                          enctype="multipart/form-data"
                                          files="true">
                                        {!! csrf_field() !!}
                                        <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden/>
                                        <input name="product_id" type="text" value="{{$products->id}}" hidden/>
                                        {{--                                        <button class="btn btn-success"><i class="fa fa-heart" title="Add To WishList"></i></button>--}}
                                        {{--                                        <a href="" type="submit" class="btn  btn_buy_product_wishlist">Add to--}}
                                        {{--                                            WishList</a>--}}
                                        <button class="btn  btn_buy_product"> Add to Wishlist</button>

                                    </form>
                                @else

                                    <form action="{{route('user.wishlist.store')}}" method="POST"
                                          enctype="multipart/form-data"
                                          files="true">
                                        {!! csrf_field() !!}

                                        {{--                                                                                <button class="btn btn-success"><i class="fa fa-heart"></i></button>--}}
                                        {{--                                        <a href="" class="btn  btn_buy_product_wishlist">Add to--}}
                                        {{--                                            WishList</a>--}}

                                        <button class="btn  btn_buy_product"> Add to Wishlist</button>


                                    </form>


                                @endif


                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-sm-2">

                <h5 class="mt-5">Similar Products</h5>








            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-sm-12">

            {{--            <nav class="detail_nav_items stick_nav" id="stick-navbar">--}}
            {{--                <div class="nav-tabs d-flex ml-4">--}}
            {{--                    <a class="nav-link active" href="#product_details">Product-Description</a>--}}
            {{--                    <a class="nav-link" href="#product_review">Reviews</a>--}}
            {{--                    <a class="nav-link" href="#product_policy">Return Policy</a>--}}
            {{--                    <a class="nav-link" href="#">Shipping Details</a>--}}
            {{--                </div>--}}
            {{--            </nav>--}}

            <ul class="nav flex-column detail_nav_items stick_nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#product_details">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product_review">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product_policy">Return</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shipping</a>
                </li>
            </ul>


            {{--            <nav class="navbar  bg-light top-nav sticky-top">--}}
            {{--                <a class="navbar-brand" href="{{route('user.dashboard')}}">--}}

            {{--                    <img src="{{asset('images/shoppy.png')}}"  class="d-inline-block align-top logo" alt="">--}}
            {{--                </a>--}}
            {{--                <div class=" social d-flex">--}}
            {{--                    <div class="social-icons">--}}
            {{--                        <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
            {{--                    </div>--}}
            {{--                    <div class="social-icons">--}}
            {{--                        <a href="#"><i class="fab fa-instagram"></i></a>--}}
            {{--                    </div>--}}
            {{--                    <div class="social-icons">--}}
            {{--                        <a href="#"><i class="fab fa-twitter"></i></a>--}}
            {{--                    </div>--}}
            {{--                    <div class="social-icons">--}}
            {{--                        <a href="#"><i class="far fa-envelope"></i></a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </nav>--}}

        </div>

    </div>

    <div class="row details-class">
        <div class="col-sm-8 offset-2 ">
            {{--            <h2 id="product_details"> Details</h2>--}}
            <div id="product_details">
                {!! $products->long_description !!}

            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-10 offset-1">
            <h3 id="product_policy">Return Policies</h3>
            @include('assets.policy.return_policy')
        </div>
    </div>


    <div class="row">
        <div class="col-sm-10 offset-2">
            <h3 id="product_review">Reviews</h3>
            <div class="ratings col-sm-12">
                <div class="row">
                    <div class="col-md-6 border-right border-dark">

                        <span class="heading">User Rating</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>4.1 average based on 254 reviews.</p>
                        <hr style="border:3px solid #f1f1f1">

                        <div class="row">
                            <div class="side">
                                <div>5 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-5"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>150</div>
                            </div>
                            <div class="side">
                                <div>4 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-4"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>63</div>
                            </div>
                            <div class="side">
                                <div>3 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-3"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>15</div>
                            </div>
                            <div class="side">
                                <div>2 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-2"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>6</div>
                            </div>
                            <div class="side">
                                <div>1 star</div>
                            </div>
                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-1"></div>
                                </div>
                            </div>
                            <div class="side right">
                                <div>20</div>
                            </div>
                        </div>
                    </div>
                    {{--                        <div class="col-md-6">--}}

                    {{--                            @if(count($boughtproducts) == 0)--}}
                    {{--                                Please Make a purchase to make reviews--}}
                    {{--                            @else--}}

                    {{--                                <form action="{{route('user.product.reviews')}}" method="post">--}}
                    {{--                                    {!! csrf_field() !!}--}}
                    {{--                                    <h3 class="ratings-header py-3">Have You Used This Product ?</h3>--}}
                    {{--                                    <div>--}}
                    {{--                                        <p>Make ratings on the products below here..</p>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="card-ratings-wrapper ">--}}
                    {{--                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>--}}
                    {{--                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>--}}
                    {{--                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>--}}
                    {{--                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>--}}
                    {{--                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>--}}
                    {{--                                    </div>--}}
                    {{--                                    --}}{{--                                <input type="number" name="ratings">--}}
                    {{--                                    <div class="form-group">--}}
                    {{--                                        <label for="formControlRange">Example Range input</label>--}}
                    {{--                                        <input type="range" class="form-control-range" id="formControlRange" name="rangeinput" min="0" max="5" value="0">--}}
                    {{--                                    </div>--}}

                    {{--                                    <div>--}}
                    {{--                                        <p>Make remarks on the products below here..</p>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="comment-form my-3">--}}
                    {{--                                        <input type="text" name="product_id" value="{{$products->id}}" hidden>--}}
                    {{--                                        --}}{{--                                <input name="user_id" type="text" value="{{Illuminate\Auth\Fa}}" hidden />--}}

                    {{--                                        <textarea class="text-area  " name="comments" id="" cols="20" rows="7"></textarea>--}}
                    {{--                                        <button class="product-button ">Submit Comment</button>--}}

                    {{--                                    </div>--}}
                    {{--                                </form>--}}
                    {{--                            @endif--}}

                    {{--                        </div>--}}
                </div>
                <div class="row px-3">
                    <h3 class="ratings-header">All reviews</h3>
                    <div class="reviews col-sm-12 d-flex py-4">
                        @foreach($reviews as $review)

                            <div class="col-sm-5 buyer-rating-wrapper">
                                <h4 class="ratings-user-header">{{$review->user_name->f_name}} {{$review->user_name->l_name}}</h4>
                                <span class="ratings-user-date ">{{$review->created_at}}</span>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-ratings-wrapper">
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                </div>
                                <div class="">
                                    <p class="comment">
                                        {{$review->comments}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--                        <div class="reviews col-sm-12 d-flex py-4">--}}
                    {{--                            <div class="col-sm-5 buyer-rating-wrapper">--}}
                    {{--                                <h4 class="ratings-user-header">Mark Kariuki</h4>--}}
                    {{--                                <span class="ratings-user-date">June 30, 2019</span>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-sm-7">--}}
                    {{--                                <div class="card-ratings-wrapper">--}}
                    {{--                                    <span class="rating-count"><i class="far fa-star"></i></span>--}}
                    {{--                                    <span class="rating-count"><i class="far fa-star"></i></span>--}}
                    {{--                                    <span class="rating-count"><i class="far fa-star"></i></span>--}}
                    {{--                                    <span class="rating-count"><i class="far fa-star"></i></span>--}}
                    {{--                                    <span class="rating-count"><i class="far fa-star"></i></span>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="comment">--}}
                    {{--                                    <p>The phone has a great camera. Other features are also okay. </p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                </div>
            </div>
        </div>
    </div>

    @include('assets.footer.footer')


@endsection

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>


{{--<script>--}}
{{--    window.onscroll = function() {myFunction()};--}}

{{--    var header = document.getElementById('navbar');--}}

{{--    var header2 = document.getElementById('stick-navbar');--}}
{{--    var sticky = header2.offsetTop;--}}


{{--    function myFunction() {--}}
{{--        if (window.pageYOffset > sticky) {--}}
{{--            // header2.classList.remove("sticky-top");--}}
{{--            // alert('helloo');--}}
{{--            console.log(sticky);--}}

{{--        } else {--}}
{{--            // header2.classList.add("sticky-top");--}}

{{--            // alert('hellolloooo');--}}

{{--        }--}}

{{--    }--}}
{{--</script>--}}


<script>
    // imageswap for product details images
    function imageSwap(imgs) {
        // Get the expanded image
        var expandImg = document.getElementById("expandedImg");
        // Use the same src in the expanded image as the image being clicked on from the grid
        expandImg.src = imgs.src;
        // Show the container element (hidden with CSS)
        expandImg.parentElement.style.display = "block";
    }
</script>


<!-- Modal -->
@if(\Illuminate\Support\Facades\Auth::user() != null)
    @foreach($products as $product)
        <div class="modal fade" id="exampleModal{{$products->id}}" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal_custom">
                    <div class="modal-header">
                        <h1 class="modal-title cart_name_product" id="exampleModalLabel">
                            {{$products->name}}
                        </h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="" style="width: 18rem;">
                                    <img src="{{asset('/products/images/featured/'.$products->featured_image_url)}}"
                                         class="card-img-top img_add_cart" alt="...">
                                    <div class="card-body">
                                        <div class="price_custom">
                                            <h5 class="text-blue font-italic">
                                                <span class="mr-1">KShs</span>
                                                @if($offers != null)

                                                    {{($products->unit_cost)-($offers->discount *$products->unit_cost )/100}}

                                                @else
                                                    {{$products->unit_cost}}
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 cart_options_row">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        Select options here <i class="far fa-hand-point-down"></i>
                                    </h5>
                                </div>
                                <form action="{{route('user.add.cart')}}" method="POST" onsubmit="return checkRadio()">
                                    {!! csrf_field() !!}
                                    <small class="mb-5">To be delivered,<b class="small_strong">CHARGES WILL BE
                                            ADDED</b>!!
                                    </small>
                                    <div class="custom-control custom-radio custom-control-inline my-2">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                               class="custom-control-input" value="2">
                                        <label class="custom-control-label" for="customRadioInline1"><b>Be
                                                delivered</b></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline my-2">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                               class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="customRadioInline2"><b>No
                                                Delivery</b></label>
                                    </div>
                                    <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden/>
                                    <input name="product_id" type="text" value="{{$products->id}}" hidden/>
                                    @if($offers != null)
                                        <input name="amount" type="text"
                                               value="{{($products->unit_cost)-($offers->discount *$products->unit_cost )/100}}"
                                               hidden/>

                                    @else
                                        <input name="amount" type="text" value="{{$products->unit_cost}}" hidden/>
                                    @endif


                                    <div class="form-group">
                                        <label for="examplequantity">Quantity</label>
                                        <small class="form-text text-muted">Select the number<strong
                                                    class="small_strong">(Quantity to be greater or equal to
                                                ONE)</strong> of items required
                                        </small>
                                        <input type="number" class="form-control" name="quantity" id="examplequantity"
                                               min="1">
                                    </div>

                                    <div class="row">

                                        @foreach($products->variant as $variant)
                                            <div class="form-group">

                                                <label for="{{$variant->type}}">{{$variant->type}}</label>

                                                @if(count($variant->variant_option) != 0)
                                                    <select class="form-control" name="option[{{$variant->type}}]">
                                                        <option value="--select option--" selected disabled>--select
                                                            option--
                                                        </option>
                                                        @foreach($variant->variant_option as $option)
                                                            <option value="{{$option->id}}">{{$option->name}}</option>
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <select class="form-control" name="variantoptions_id">
                                                        <option value="no options" selected disabled>No Options Yet
                                                        </option>
                                                    </select>
                                                @endif

                                            </div>
                                        @endforeach
                                    </div>


                                    <input type="submit" class="btn btn-primary btn_buy_now submitButton"
                                           id="{{$products->id}}" value="Save changes">
                                </form>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    @endforeach
@else
@endif