
{{--    @foreach ($productchunk as $item)--}}
{{--                @foreach ($products->chunk(3) as $productchunk)--}}


<div class="row">
    @foreach($products as $product)

        <div class="col-lg-3 card_align">

            <div class="card card_row">
                <div class="img-container">

                    <a href="#"><img class="card-img-top" src="{{asset('/products/images/featured/'.$product->featured_image_url)}}" alt="Card image cap"></a>
                    <div class="card-body">



                        <div class="card_buttons">
                            <ul class="nav">
                                <div class="nav-item pl-4">
                                    <form action="{{route('user.add.cart')}}" method="POST" enctype="multipart/form-data" files="true">
                                        {!! csrf_field() !!}
                                        @if(\Illuminate\Support\Facades\Auth::user() != null)


{{--                                                <button class="btn"><i class="fa fa-cart-plus"></i></button>--}}

                                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal{{$product->id}}">
                                                <i class="fa fa-cart-plus"></i>
                                            </button>
                                        @else
                                                    <button class="btn"><i class="fa fa-cart-plus"></i></button>
                                        @endif
                                    </form>
                                </div>
                                <div class="hr_vertical">

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
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-between card_footer">
                    <p class="align-self-center mb-0">{{$product->name}}</p>
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
                        {{$product->unit_cost}}
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






<!-- Modal -->
@if(\Illuminate\Support\Facades\Auth::user() != null)
    @foreach($products as $product)
<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal_custom">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">
                    {{$product->name}}
                </h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="" style="width: 18rem;">
                            <img src="{{asset('/products/images/featured/'.$product->featured_image_url)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="price_custom">
                                    <h5 class="text-blue font-italic">
                                        <span class="mr-1">KShs</span>
                                        {{$product->unit_cost}}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                Select options here  <i class="far fa-hand-point-down"></i>
                            </h5>

                        </div>

                        <form action="{{route('user.add.cart')}}" method="POST">
                            {!! csrf_field() !!}
                        <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                        <input name="product_id" type="text" value="{{$product->id}}" hidden/>
                        <input name="amount" type="text" value="{{$product->unit_cost}}" hidden/>
                        <input name="quantity" type="number"value="1"/>

                        @foreach($product->variant as $variant)
                            <div class="form-group">

                                <label for="{{$variant->type}}">{{$variant->type}}</label>

                                @if(count($variant->variant_option) != 0)
                                    <select class="form-control" name="option[{{$variant->type}}]">
                                        <option value="--select option--" selected disabled>--select option--</option>
                                        @foreach($variant->variant_option as $option)
                                            <option value="{{$option->id}}">{{$option->name}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <select class="form-control" name="variantoptions_id">
                                        <option value="no options" selected disabled>No Options Yet</option>
                                    </select>
                                @endif

                            </div>
                        @endforeach

                            <button  class="btn btn-primary">Save changes</button>
{{--                            <button class="btn"><i class="fa fa-cart-plus"></i></button>--}}
                        </form>

                    </div>
                </div>


            </div>
            <div class="modal-footer">

{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
            </div>
        </div>
    </div>
</div>
@endforeach
@else
    <button class="btn"><i class="fa fa-cart-plus"></i></button>
@endif