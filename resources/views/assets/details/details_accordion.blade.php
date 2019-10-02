@if(\Illuminate\Support\Facades\Auth::user() == null)

    <div class="col-md-9 details_accordions">
        <div class="accordion" id="accordionExample">
            <button class="collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Description
            </button>


            <div id="collapseOne" class="collapse details_accordion_content" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="product-features-container p-4">
                    <div class="row">
                        <div class="col-md-9 row">
                            {!! $products->long_description !!}

                        </div>
                        <div class="col-md-3 row d-flex flex-column justify-content-center">
                            <div class="product-pics">
                                <img src="{{asset('/products/images/featured/'.$products->featured_image_url)}}" class="card-img-top" alt="...">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            {{--END OF DESCRIPTION--}}
            {{--REVIEWS PART--}}

            <div id="headingTwo">

                <button class="collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Reviews
                </button>

            </div>
            <div id="collapseTwo" class="collapse details_accordion_content" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="ratings col-sm-12">
                    <div class="row">
                        <div class="col-md-6 border-right border-dark">
                            {{--                            <h3 class="ratings-header">Average Ratings</h3>--}}
                            {{--                            <div class="star-ratings">--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="average-ratings">5</span>--}}
                            {{--                            </div>--}}
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



        {{--END OF REVIEWS--}}



        {{--START OF OTHER SELLERS WITH SIMILAR PRODUCTS--}}


@if(count($otherproducts) != 0)


        <div id="headingThree">

            <button class=" collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Other Sellers
            </button>

        </div>
        <div id="collapseThree" class="collapse details_accordion_content" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="table_custom">

                <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        {{--                        <th class="th-sm">Seller</th>--}}
                        <th class="th-sm">Product Name</th>
                        <th class="th-sm">Store Name</th>
                        <th class="th-sm">Brand</th>
                        <th class="th-sm">Region</th>
                        <th class="th-sm">Price</th>
                        <th class="th-sm">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($otherproducts as $otherproduct)


                        <tr class="py-3">
                            {{--                            <td class="seller-name">{{$otherproduct->seller->f_name}}</td>--}}
                            <td class="seller-product">{{$otherproduct->name}}</td>
                            <td class="seller-store">{{$otherproduct->seller->store_name}}</td>
                            <td class="seller-region">{{$otherproduct->brand_name}}</td>
                            <td class="seller-region">{{$otherproduct->seller->county}}</td>
                            <td class="seller-price">{{$otherproduct->unit_cost}}</td>
                            <td class="d-flex justify-content-center align-items-center link"><a href="{{url('user/details',['id'=>$otherproduct->id])}}" class="product-button text-center">Buy Now</a></td>
                        </tr>

                    @endforeach
                    {{--                        <tr class="py-3">--}}
                    {{--                            <td class="seller-name">Mark</td>--}}
                    {{--                            <td class="seller-product">INFINIX HOT S4, 6.2", 32GB + 3GB(DUAL SIM), BLUE</td>--}}
                    {{--                            <td class="seller-store">KENYA ELECTRONICS</td>--}}
                    {{--                            <td class="seller-region">nairobi</td>--}}
                    {{--                            <td class="seller-price">17,000</td>--}}
                    {{--                            <td class="d-flex justify-content-center align-items-center link"><a href="#" class="product-button text-center">Buy Now</a></td>--}}
                    {{--                        </tr>--}}
                    {{--                        <tr class="py-3">--}}
                    {{--                            <td class="seller-name">Mark</td>--}}
                    {{--                            <td class="seller-product">INFINIX HOT S4, 6.2", 32GB + 3GB(DUAL SIM), BLUE</td>--}}
                    {{--                            <td class="seller-store">KENYA ELECTRONICS</td>--}}
                    {{--                            <td class="seller-region">nairobi</td>--}}
                    {{--                            <td class="seller-price">17,000</td>--}}
                    {{--                            <td class="d-flex justify-content-center align-items-center link"><a href="#" class="product-button text-center">Buy Now</a></td>--}}
                    {{--                        </tr>--}}
                    </tbody>

                </table>

            </div>

        </div>

    </div>
    @else
    @endif


    @else

    <div class="col-md-9 details_accordions">
        <div class="accordion" id="accordionExample">
            <button class="collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Description
            </button>


            <div id="collapseOne" class="collapse details_accordion_content" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="product-features-container p-4">
                    <div class="row">
                        <div class="col-md-9 row">
                            {!! $products->long_description !!}

                        </div>
                        <div class="col-md-3 row d-flex flex-column justify-content-center">
                            <div class="product-pics">
                                <img src="{{asset('/products/images/featured/'.$products->featured_image_url)}}" class="card-img-top" alt="...">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            {{--END OF DESCRIPTION--}}
            {{--REVIEWS PART--}}

            <div id="headingTwo">

                <button class="collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Reviews
                </button>

            </div>
            <div id="collapseTwo" class="collapse details_accordion_content" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="ratings col-sm-12">
                    <div class="row">
                        <div class="col-md-6 border-right border-dark">
                            {{--                            <h3 class="ratings-header">Average Ratings</h3>--}}
                            {{--                            <div class="star-ratings">--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>--}}
                            {{--                                <span class="average-ratings">5</span>--}}
                            {{--                            </div>--}}
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
                        <div class="col-md-6">

                            @if(count($boughtproducts) == 0)
                                Please Make a purchase to make reviews
                            @else

                                <form action="{{route('user.product.reviews')}}" method="post">
                                    {!! csrf_field() !!}
                                    <h3 class="ratings-header py-3">Have You Used This Product ?</h3>
                                    <div>
                                        <p>Make ratings on the products below here..</p>
                                    </div>
                                    <div class="card-ratings-wrapper ">
                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>
                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>
                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>
                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>
                                        <span class="rating-count rating-count-md"><i class="far fa-star" name="rating"></i></span>
                                    </div>
                                    {{--                                <input type="number" name="ratings">--}}
                                    <div class="form-group">
                                        <label for="formControlRange">Example Range input</label>
                                        <input type="range" class="form-control-range" id="formControlRange" name="rangeinput" min="0" max="5" value="0">
                                    </div>

                                    <div>
                                        <p>Make remarks on the products below here..</p>
                                    </div>
                                    <div class="comment-form my-3">
                                        <input type="text" name="product_id" value="{{$products->id}}" hidden>
                                        {{--                                <input name="user_id" type="text" value="{{Illuminate\Auth\Fa}}" hidden />--}}

                                        <textarea class="text-area  " name="comments" id="" cols="20" rows="7"></textarea>
                                        <button class="product-button ">Submit Comment</button>

                                    </div>
                                </form>
                            @endif

                        </div>
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



        {{--END OF REVIEWS--}}



        {{--START OF OTHER SELLERS WITH SIMILAR PRODUCTS--}}





        <div id="headingThree">

            <button class=" collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Other Sellers
            </button>

        </div>
        <div id="collapseThree" class="collapse details_accordion_content" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="table_custom">
                <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        {{--                        <th class="th-sm">Seller</th>--}}
                        <th class="th-sm">Product Name</th>
                        <th class="th-sm">Store Name</th>
                        <th class="th-sm">Brand</th>
                        <th class="th-sm">Region</th>
                        <th class="th-sm">Price</th>
                        <th class="th-sm">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($otherproducts as $otherproduct)


                        <tr class="py-3">
                            {{--                            <td class="seller-name">{{$otherproduct->seller->f_name}}</td>--}}
                            <td class="seller-product">{{$otherproduct->name}}</td>
                            <td class="seller-store">{{$otherproduct->seller->store_name}}</td>
                            <td class="seller-region">{{$otherproduct->brand_name}}</td>
                            <td class="seller-region">{{$otherproduct->seller->county}}</td>
                            <td class="seller-price">{{$otherproduct->unit_cost}}</td>
                            <td class="d-flex justify-content-center align-items-center link"><a href="{{url('user/details',['id'=>$otherproduct->id])}}" class="product-button text-center">Buy Now</a></td>
                        </tr>

                    @endforeach
                    {{--                        <tr class="py-3">--}}
                    {{--                            <td class="seller-name">Mark</td>--}}
                    {{--                            <td class="seller-product">INFINIX HOT S4, 6.2", 32GB + 3GB(DUAL SIM), BLUE</td>--}}
                    {{--                            <td class="seller-store">KENYA ELECTRONICS</td>--}}
                    {{--                            <td class="seller-region">nairobi</td>--}}
                    {{--                            <td class="seller-price">17,000</td>--}}
                    {{--                            <td class="d-flex justify-content-center align-items-center link"><a href="#" class="product-button text-center">Buy Now</a></td>--}}
                    {{--                        </tr>--}}
                    {{--                        <tr class="py-3">--}}
                    {{--                            <td class="seller-name">Mark</td>--}}
                    {{--                            <td class="seller-product">INFINIX HOT S4, 6.2", 32GB + 3GB(DUAL SIM), BLUE</td>--}}
                    {{--                            <td class="seller-store">KENYA ELECTRONICS</td>--}}
                    {{--                            <td class="seller-region">nairobi</td>--}}
                    {{--                            <td class="seller-price">17,000</td>--}}
                    {{--                            <td class="d-flex justify-content-center align-items-center link"><a href="#" class="product-button text-center">Buy Now</a></td>--}}
                    {{--                        </tr>--}}
                    </tbody>

                </table>

            </div>

        </div>

    </div>
    </div>

@endif