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


            <div id="headingTwo">

                    <button class="collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Reviews
                    </button>

            </div>
            <div id="collapseTwo" class="collapse details_accordion_content" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="ratings col-sm-12">
                    <div class="row">
                        <div class="col-md-6 border-right border-dark">
                            <h3 class="ratings-header">Average Ratings</h3>
                            <div class="star-ratings">
                                <span class="rating-count-lg"><i class="fas fa-star"></i></span>
                                <span class="average-ratings">5</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="ratings-header py-3">Have You Used This Product</h3>
                            <div class="card-ratings-wrapper ">
                                <span class="rating-count rating-count-md"><i class="far fa-star"></i></span>
                                <span class="rating-count rating-count-md"><i class="far fa-star"></i></span>
                                <span class="rating-count rating-count-md"><i class="far fa-star"></i></span>
                                <span class="rating-count rating-count-md"><i class="far fa-star"></i></span>
                                <span class="rating-count rating-count-md"><i class="far fa-star"></i></span>
                            </div>
                            <div class="comment-form my-3">
                                <form action="">
                                    <textarea class="text-area text-area-custom footer-textarea" name="" id="" cols="30" rows="7"></textarea>
                                    <button class="product-button ">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3">
                        <h3 class="ratings-header">All reviews</h3>
                        <div class="reviews col-sm-12 d-flex py-4">
                            <div class="col-sm-5 buyer-rating-wrapper">
                                <h4 class="ratings-user-header">Mark Kariuki</h4>
                                <span class="ratings-user-date ">June 30, 2019</span>
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
                                    <p class="comment">The phone has a great camera. Other features are also okay. </p>
                                </div>
                            </div>
                        </div>
                        <div class="reviews col-sm-12 d-flex py-4">
                            <div class="col-sm-5 buyer-rating-wrapper">
                                <h4 class="ratings-user-header">Mark Kariuki</h4>
                                <span class="ratings-user-date">June 30, 2019</span>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-ratings-wrapper">
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                    <span class="rating-count"><i class="far fa-star"></i></span>
                                </div>
                                <div class="comment">
                                    <p>The phone has a great camera. Other features are also okay. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>









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
                        <th class="th-sm">Seller</th>
                        <th class="th-sm">Product Name</th>
                        <th class="th-sm">Store Name</th>
                        <th class="th-sm">Region</th>
                        <th class="th-sm">Price</th>
                        <th class="th-sm">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr class="py-3">
                            <td class="seller-name">Mark</td>
                            <td class="seller-product">INFINIX HOT S4, 6.2", 32GB + 3GB(DUAL SIM), BLUE</td>
                            <td class="seller-store">KENYA ELECTRONICS</td>
                            <td class="seller-region">nairobi</td>
                            <td class="seller-price">17,000</td>
                            <td class="d-flex justify-content-center align-items-center link"><a href="#" class="product-button text-center">Buy Now</a></td>
                        </tr>
                        <tr class="py-3">
                            <td class="seller-name">Mark</td>
                            <td class="seller-product">INFINIX HOT S4, 6.2", 32GB + 3GB(DUAL SIM), BLUE</td>
                            <td class="seller-store">KENYA ELECTRONICS</td>
                            <td class="seller-region">nairobi</td>
                            <td class="seller-price">17,000</td>
                            <td class="d-flex justify-content-center align-items-center link"><a href="#" class="product-button text-center">Buy Now</a></td>
                        </tr>
                        <tr class="py-3">
                            <td class="seller-name">Mark</td>
                            <td class="seller-product">INFINIX HOT S4, 6.2", 32GB + 3GB(DUAL SIM), BLUE</td>
                            <td class="seller-store">KENYA ELECTRONICS</td>
                            <td class="seller-region">nairobi</td>
                            <td class="seller-price">17,000</td>
                            <td class="d-flex justify-content-center align-items-center link"><a href="#" class="product-button text-center">Buy Now</a></td>
                        </tr>
                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>

