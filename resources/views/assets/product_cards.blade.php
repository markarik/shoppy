<div class="row">
    @foreach($products as $product)

        <div class="col-lg-2 col-sm-2">
            <div class="carding">
                <div class="carding__side carding__side--front">
                    <div class="carding__picture">
                        <a href="{{url('user/details',['id'=>$product->id])}}">
                            <img class=" carding__image"
                                 src="{{asset('/products/images/featured/'.$product->featured_image_url)}}"
                                 alt="Card image cap">
                        </a>
                    </div>
                    <div>
                        <p class="product_name">{{ strlen($product->name) > 30 ? substr($product->name,0,30).'...' : $product->name }}</p>

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
                            @if(count($offers) !=0)

                                @foreach($offers as $offer)
                                    @if($offer->product_id == $product->id)




                                        <div class="d-flex">
                                            <h6 class="mr-2">
                                                KShs</h6> {{($product->unit_cost)-($offer->discount *$product->unit_cost )/100}}

                                        </div>

                                        <div class="details_card_prices ">
                                            kShs {{$product->unit_cost}}
                                        </div>

                                    @else


                                        <div class="d-flex mb-3">
                                            <h6 class="mr-2">KShs</h6>{{$product->unit_cost}}
                                        </div>

                                    @endif
                                @endforeach
                            @else
                                <span class="mr-1 carding__details--spanunit ">KShs</span>

                                <span class="carding__details--spanamount">{{$product->unit_cost}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="carding__discount">

                    </div>
                </div>


            </div>

        </div>

    @endforeach
</div>