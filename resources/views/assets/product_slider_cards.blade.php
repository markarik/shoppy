<div class="row">
    @foreach($productings as $product)

        <div class="col-lg-2 col-sm-2">
            <div class="cardings">

                <div class="cardings__side cardings__side--front">

                    <div class="cardings__newproduct">
                        <h6 class="cardings__newproduct--new">NEW</h6>
                    </div>
                    <div class="cardings__picture">
                        <a href="{{url('user/details',['id'=>$product->id])}}">
                            <img class=" cardings__image"
                                 src="{{asset('/products/images/featured/'.$product->featured_image_url)}}"
                                 alt="Card image cap">
                        </a>
                    </div>


                </div>


            </div>

        </div>

    @endforeach
</div>

