@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($wishlists as $wishlist)
{{--            {{dd($wishlist->product->featured_image_url)}}--}}

            <div class="col-lg-3 card_align">

                <div class="card card_row">
                    <div class="img-container">

                        <a href="#"><img class="card-img-top" src="{{asset('/products/images/featured/'.$wishlist->url)}}" alt="Card image cap"></a>
                        <div class="card-body">

                            {{--                    <h5 class="card-title">Card title</h5>--}}
                            {{--                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                            {{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}

                            <div class="card_buttons">
                                <ul class="nav">
                                    <div class="nav-item pl-4">
                                        <form action="{{route('user.add.cart')}}" method="POST" enctype="multipart/form-data" files="true">
                                            {!! csrf_field() !!}
                                            @if(\Illuminate\Support\Facades\Auth::user() != null)

                                                <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                                                <input name="product_id" type="text" value="{{$wishlist->product_id}}" hidden/>
                                                <input name="quantity" type="text" hidden/>
                                                <button class="btn">Add to Cart</button>
{{--                                            @else--}}
{{--                                                <button class="btn"><i class="fa fa-cart-plus"></i></button>--}}
                                            @endif
                                        </form>
                                    </div>


                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="d-flex justify-content-between card_footer">
{{--                        <p class="align-self-center mb-0">{{$feature->name}}</p>--}}
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
                            {{$wishlist->cost}}
                        </h5>
                    </div>

                    <div>
                        <h5 class="text-blue font-italic mb-0">
                            <span class="mr-1">$</span>
                            200
                        </h5>
                    </div>
                    <div class="hr_custom"></div>
                    <div class="ml-auto btn_buy_now_div d-flex">
                        <a class="btn btn-success btn_buy_now" href="{url('user/details',['id'=>$product->id])}}">Buy Now</a>

                        <form action="{{route('product.delete.wishlist',['id'=>$wishlist->id])}}" method="post">
                            {!! csrf_field() !!}
                            <input type="submit" class="btn btn-danger btn_remove_wishlist clearfix" value="Remove">



                        </form>
                    </div>
                </div>

            </div>

        @endforeach
    </div>
    @include('assets.footer.footer')
@endsection
