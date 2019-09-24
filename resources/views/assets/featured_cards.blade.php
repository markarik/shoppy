{{--<div class="row">--}}
{{--    @foreach($featured as $feature)--}}
{{--        <div class="col-lg-3 card_align">--}}

{{--            <div class="card card_row">--}}
{{--                <div class="img-container">--}}

{{--                    <a href="#"><img class="card-img-top"--}}
{{--                                     src="{{asset('/products/images/featured/'.$feature->featured_image_url)}}"--}}
{{--                                     alt="Card image cap"></a>--}}
{{--                    <div class="card-body">--}}

{{--                    <h5 class="card-title">Card title</h5>--}}

{{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}

{{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}


{{--                        <div class="card_buttons">--}}
{{--                            <ul class="nav">--}}
{{--                                <div class="nav-item pl-4">--}}
{{--                                    <form action="{{route('user.add.cart')}}" method="POST" enctype="multipart/form-data" files="true">--}}
{{--                                        {!! csrf_field() !!}--}}
{{--                                        @if(\Illuminate\Support\Facades\Auth::user() !=null)--}}
{{--                                            <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />--}}
{{--                                            @foreach($products as $product)--}}
{{--                                                <input name="product_id" type="text" value="{{$product->id}}" hidden/>--}}
{{--                                                <input name="amount" type="text" value="{{$product->unit_cost}}" hidden/>--}}
{{--                                            @endforeach--}}
{{--                                            <input name="quantity" type="text" hidden/>--}}
{{--                                            <button class="btn"><i class="fa fa-cart-plus"></i></button>--}}
{{--                                        @else--}}
{{--                                        <button class="btn"><i class="fa fa-cart-plus"></i></button>--}}
{{--                                        @endif--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <div class="hr_vertical">--}}

{{--                                </div>--}}
{{--                                <div class="nav-item ml-auto pr-5">--}}
{{--                                    <form action="{{route('user.wishlist.store')}}" method="post">--}}
{{--                                        {{csrf_field()}}--}}
{{--                                    @if(\Illuminate\Support\Facades\Auth::user() != null)--}}


{{--                                            <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden/>--}}
{{--                                            @foreach($products as $product)--}}
{{--                                                <input name="product_id" type="text" value="{{$product->id}}" hidden/>--}}
{{--                                            @endforeach--}}
{{--                                            <button class="btn"><i class="fa fa-heart"></i></button>--}}

{{--                                    @else--}}
{{--                                        <button class="btn"><i class="fa fa-heart"></i></button>--}}
{{--                                    @endif--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--                <div class="d-flex justify-content-between card_footer">--}}
{{--                    <p class="align-self-center mb-0">{{$feature->name}}</p>--}}
{{--                    <h5 class="text-blue font-italic mb-0">--}}
{{--                        <span class="mr-1">--}}
{{--                            (50)--}}
{{--                        </span>--}}

{{--                    </h5>--}}
{{--                </div>--}}
{{--                <div class="star_custom ml-auto">--}}
{{--                    <i class="fas fa-star"></i>--}}
{{--                    <i class="fas fa-star"></i>--}}
{{--                    <i class="fas fa-star"></i>--}}
{{--                    <i class="fas fa-star"></i>--}}
{{--                    <i class="far fa-star"></i>--}}
{{--                </div>--}}
{{--                <div class="price_custom">--}}
{{--                    <h5 class="text-blue font-italic">--}}
{{--                        <span class="mr-1">KShs</span>--}}
{{--                        {{$feature->unit_cost}}--}}
{{--                    </h5>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <h5 class="text-blue font-italic mb-0">--}}
{{--                        <span class="mr-1">$</span>--}}
{{--                        200--}}
{{--                    </h5>--}}
{{--                </div>--}}
{{--                <div class="hr_custom"></div>--}}
{{--                <div class="d-flex">--}}
{{--                    <div class="ml-auto btn_buy_now_div">--}}
{{--                        <a class="btn btn-success btn_buy_now" href="{{url('user/details',['id'=>$feature->id])}}">Buy Now</a>--}}
{{--                    </div>--}}
{{--                    <div class="nav-item ml-auto pr-5">--}}
{{--                        <form action="{{route('user.wishlist.store')}}" method="post">--}}
{{--                            {{csrf_field()}}--}}
{{--                            @if(\Illuminate\Support\Facades\Auth::user() != null)--}}


{{--                                <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden/>--}}
{{--                                @foreach($products as $product)--}}
{{--                                    <input name="product_id" type="text" value="{{$product->id}}" hidden/>--}}
{{--                                @endforeach--}}
{{--                                <button class="btn"><i class="fa fa-heart"></i></button>--}}

{{--                            @else--}}
{{--                                <button class="btn"><i class="fa fa-heart"></i></button>--}}
{{--                            @endif--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    @endforeach--}}
{{--</div>--}}



<div class="row">
    @foreach($featured as $product)

        <div class="col-lg-3">
            <div class="carding">
                <div class="carding__side carding__side--front">
                    <div class="carding__picture">
                        <img class=" carding__image"
                             src="{{asset('/products/images/featured/'.$product->featured_image_url)}}"
                             alt="Card image cap">
                    </div>
                    <div>
                        <h4 class="carding__heading">
                            {{ strlen($product->name) > 6 ? substr($product->name,0,6).'...' : $product->name }}


                        </h4>
                    </div>


                    <div class="carding__inventory">
                        <small>

                            Only <span class="carding__inventory--quantity"><b>{{$product->quantity}}</b></span>
                            Available


                        </small>
                    </div>

                    <div class="carding__details">
                        <h5 class="carding__details--amount">
                            <span class="mr-1 carding__details--spanunit ">KShs</span>
                            <span class="carding__details--spanamount">{{$product->unit_cost}}</span>
                        </h5>
                    </div>
                    <div class="carding__discount">
                        @foreach($offers as $offer)
                            @if($offer->product_id == $product->id)

                                <h5 class="text-blue font-italic ml-auto mr-2 carding__discount--percentage">

                                    -{{$offer->discount}}
                                    %

                                </h5>
                            @else
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="carding__side carding__side--back">

                    <div class="carding__headingBack">
                        {{$product->name}}

                    </div>

                    <div class="carding__wishlist">
                        @if(\Illuminate\Support\Facades\Auth::user() !=null)
                            <form action="{{route('user.wishlist.store')}}" method="POST" enctype="multipart/form-data"
                                  files="true">
                                {!! csrf_field() !!}
                                <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden/>
                                <input name="product_id" type="text" value="{{$product->id}}" hidden/>
                                <button class="btn"><i class="fa fa-heart" title="Add To WishList"></i></button>


                            </form>
                        @else

                            {{--                            <form action="{{route('user.wishlist.store')}}" method="POST" enctype="multipart/form-data"--}}
                            {{--                                  files="true">--}}
                            {{--                                {!! csrf_field() !!}--}}
                            {{--                               --}}
                            {{--                                <button class="btn"><i class="fa fa-heart"></i></button>--}}


                            {{--                            </form>--}}


                        @endif


                    </div>


                    <div class="carding__shortDescription">

                        {!!  strlen($product->short_description) > 200 ? substr($product->short_description,0,200).'...' : $product->short_description !!}

                    </div>
                    <div class="d-flex">

                        @foreach($offers as $offer)
                            @if($offer->product_id == $product->id)

                                <h5 class="text-blue font-italic ml-auto mr-2 carding__discount--percentage">

                                    Kshs {{($product->unit_cost)-($offer->discount *$product->unit_cost )/100}}

                                </h5>
                            @else
                            @endif
                        @endforeach
                        <div>
                            Kshs {{$product->unit_cost}}

                        </div>

                    </div>
                    <div class="carding__rates">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="carding__button">
                        <a class="btn btn-success carding__button--buyNow"
                           href="{{url('user/details',['id'=>$product->id])}}">Buy
                            Now</a>
                    </div>
                </div>
            </div>
            {{--            {{$product->name}}--}}

        </div>

    @endforeach
</div>
