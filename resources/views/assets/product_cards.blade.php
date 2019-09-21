{{--<div class="row">--}}
{{--    @foreach($products as $product)--}}

{{--        <div class="col-lg-3 card_align">--}}

{{--            <div class="card card_row">--}}
{{--                <div class="img-container">--}}

{{--                    <a href="{{route('user.product.details',['id'=>$product->id])}}"><img class="card-img-top"--}}
{{--                                                                                          src="{{asset('/products/images/featured/'.$product->featured_image_url)}}"--}}
{{--                                                                                          alt="Card image cap"></a>--}}

{{--                </div>--}}

{{--                <div class="d-flex justify-content-between card_footer">--}}
{{--                    <p class="align-self-center ml-5 store_name_detail">{{$product->name}}</p>--}}
{{--                    <h5 class="text-blue font-italic mb-0">--}}
{{--                        <span class="m-5 inventory_cards">--}}
{{--                            {{$product->quantity}}--}}
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


{{--                <div class="price_custom d-flex ">--}}
{{--                    <h5 class="text-blue font-italic ml-2">--}}
{{--                        <span class="mr-1">KShs</span>--}}
{{--                        {{$product->unit_cost}}--}}
{{--                    </h5>--}}
{{--                    @foreach($offers as $offer)--}}
{{--                        @if($offer->product_id == $product->id)--}}

{{--                            <h5 class="text-blue font-italic ml-auto mr-2 product_discount">--}}

{{--                                {{$offer->discount}}--}}
{{--                                <span class="mr-1">%</span>--}}
{{--                                <span class="mr-1">OFF</span>--}}

{{--                            </h5>--}}
{{--                        @else--}}
{{--                        @endif--}}
{{--                    @endforeach--}}

{{--                </div>--}}


{{--                <div class="hr_custom"></div>--}}
{{--                <div class="d-flex">--}}
{{--                    <div class="ml-auto btn_buy_now_div">--}}
{{--                        <a class="btn btn-success btn_buy_now" href="{{url('user/details',['id'=>$product->id])}}">Buy--}}
{{--                            Now</a>--}}
{{--                    </div>--}}
{{--                    <div class="nav-item ml-auto pr-5">--}}
{{--                        @if(\Illuminate\Support\Facades\Auth::user() !=null)--}}
{{--                            <form action="{{route('user.wishlist.store')}}" method="POST" enctype="multipart/form-data"--}}
{{--                                  files="true">--}}
{{--                                {!! csrf_field() !!}--}}
{{--                                <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden/>--}}
{{--                                <input name="product_id" type="text" value="{{$product->id}}" hidden/>--}}
{{--                                <button class="btn"><i class="fa fa-heart"></i></button>--}}


{{--                            </form>--}}
{{--                        @else--}}
{{--                            <button class="btn"><i class="fa fa-heart fa-hearts"></i></button>--}}

{{--                        @endif--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    @endforeach--}}
{{--</div>--}}


<div class="row">
    @foreach($products as $product)

        <div class="col-lg-3">
            <div class="carding">
                <div class="carding__side carding__side--front">
                    <div class="carding__picture">
                        <img class="card-img-top"
                             src="{{asset('/products/images/featured/'.$product->featured_image_url)}}"
                             alt="Card image cap">
                    </div>
                    <div>
                        <h4 class="carding__heading">
                            {{ strlen($product->name) > 6 ? substr($product->name,0,6).'...' : $product->name }}


                        </h4>
                    </div>
                    <div class="carding__rates">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="carding__details">
                        <h5>
                            <span class="mr-1 carding__details--spanunit ">KShs</span>
                            <span class="carding__details--spanamount">{{$product->unit_cost}}</span>
                        </h5>
                    </div>
                    <div class="carding__discount">
                        @foreach($offers as $offer)
                            @if($offer->product_id == $product->id)

                                <h5 class="text-blue font-italic ml-auto mr-2 carding__discount--percentage">

                                    {{$offer->discount}}
                                    <span class="mr-1 ">% Discount</span>

                                </h5>
                            @else
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="carding__side carding__side--back">
                    <div class="carding__button">
                        <a class="btn btn-success " href="{{url('user/details',['id'=>$product->id])}}">Buy
                            Now</a>
                    </div>
                </div>
            </div>
            {{--            {{$product->name}}--}}

        </div>

    @endforeach
</div>