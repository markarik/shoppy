<div class="row">
    @foreach($featured as $feature)
        <div class="col-lg-3 card_align">

            <div class="card card_row">
                <div class="img-container">

                    <a href="#"><img class="card-img-top"
                                     src="{{asset('/products/images/featured/'.$feature->featured_image_url)}}"
                                     alt="Card image cap"></a>
                    <div class="card-body">

                    <h5 class="card-title">Card title</h5>

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>


                        <div class="card_buttons">
                            <ul class="nav">
                                <div class="nav-item pl-4">
                                    <form action="{{route('user.add.cart')}}" method="POST" enctype="multipart/form-data" files="true">
                                        {!! csrf_field() !!}
                                        @if(\Illuminate\Support\Facades\Auth::user() !=null)
                                            <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                                            @foreach($products as $product)
                                                <input name="product_id" type="text" value="{{$product->id}}" hidden/>
                                                <input name="amount" type="text" value="{{$product->unit_cost}}" hidden/>
                                            @endforeach
                                            <input name="quantity" type="text" hidden/>
                                            <button class="btn"><i class="fa fa-cart-plus"></i></button>
                                        @else
                                        <button class="btn"><i class="fa fa-cart-plus"></i></button>
                                        @endif
                                    </form>
                                </div>
                                <div class="hr_vertical">

                                </div>
                                <div class="nav-item ml-auto pr-5">
                                    <form action="{{route('user.wishlist.store')}}" method="post">
                                        {{csrf_field()}}
                                    @if(\Illuminate\Support\Facades\Auth::user() != null)


                                            <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden/>
                                            @foreach($products as $product)
                                                <input name="product_id" type="text" value="{{$product->id}}" hidden/>
                                            @endforeach
                                            <button class="btn"><i class="fa fa-heart"></i></button>

                                    @else
                                        <button class="btn"><i class="fa fa-heart"></i></button>
                                    @endif
                                    </form>
                                </div>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-between card_footer">
                    <p class="align-self-center mb-0">{{$feature->name}}</p>
                    <h5 class="text-blue font-italic mb-0">
                        <span class="mr-1">
                            (50)
                        </span>

                    </h5>
                </div>
                <div class="star_custom ml-auto">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price_custom">
                    <h5 class="text-blue font-italic">
                        <span class="mr-1">KShs</span>
                        {{$feature->unit_cost}}
                    </h5>
                </div>

                <div>
                    <h5 class="text-blue font-italic mb-0">
                        <span class="mr-1">$</span>
                        200
                    </h5>
                </div>
                <div class="hr_custom"></div>
                <div class="d-flex">
                    <div class="ml-auto btn_buy_now_div">
                        <a class="btn btn-success btn_buy_now" href="{{url('user/details',['id'=>$product->id])}}">Buy Now</a>
                    </div>
                    <div class="nav-item ml-auto pr-5">
                        @if(\Illuminate\Support\Facades\Auth::user() !=null)
                            <form action="{{route('user.wishlist.store')}}" method="POST" enctype="multipart/form-data" files="true">
                                {!! csrf_field() !!}
                                <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                                <input name="product_id" type="text" value="{{$product->id}}" hidden/>
                                <button class="btn"><i class="fa fa-heart"></i></button>



                            </form>
                        @else
                            <button class="btn"><i class="fa fa-heart"></i></button>

                        @endif

                        {{--                                    <button class="btn"><i class="fa fa-heart"></i></button>--}}

                    </div>
                </div>
            </div>

        </div>

    @endforeach
</div>



