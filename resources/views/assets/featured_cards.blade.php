<div class="row">
    @foreach($featured as $feature)

        <div class="col-lg-3 card_align">

            <div class="card card_row">
                <div class="img-container">

                    <a href="#"><img class="card-img-top" src="{{asset('/products/images/featured/'.$feature->featured_image_url)}}" alt="Card image cap"></a>
                    <div class="card-body">

                        {{--                    <h5 class="card-title">Card title</h5>--}}
                        {{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                        {{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}

                        <div class="card_buttons">
                            <ul class="nav">
                                <div class="nav-item pl-4">
                                    <form>
                                        <button class="btn"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                </div>
                                <div class="hr_vertical">

                                </div>
                                <div class="nav-item ml-auto pr-5">
                                    <form method="post" action="">
                                        <button class="btn"><i class="fa fa-heart"></i></button>
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
                <div class="ml-auto btn_buy_now_div">
                    <a class="btn btn-success btn_buy_now" href="{{url('user/details')}}">Buy Now</a>
                </div>
            </div>

        </div>

    @endforeach
</div>