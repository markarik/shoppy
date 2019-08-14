@extends('layouts.app')

@section('content')

        <div class="container-fluid">
{{--            @foreach($products as $product)--}}
            <div class="row details_row">
                <div class="col-md-1 other_images_column imagescrollwrapper">

                    @foreach($extraimages as $extraimage)

                            <div class="details_other_images imagescrollimg">
{{--                                <img src="{{asset('images/L1.jpg')}}">--}}
                                <img src="{{asset('/products/images/others/'.$extraimage->image_url)}}" class="card-img-top" alt="...">

                            </div>


                   @endforeach



                </div>

                <div class="col-md-3  details_custom">
                    
                    <div class="details_image_custom">
                        <img src="{{asset('/products/images/featured/'.$products->featured_image_url)}}" class="card-img-top" alt="...">
                    </div>

                </div>
                <div class="col-md-4 details_custom">

                   <div class="details_card_custom">

                       <h3>Where does it come from?</h3>
                   </div>
                   <div class="">
                       <nav class="nav">
                           <p>Brand :</p>

                           <p>
                               <i>
                                  <h3> {{$products->brand_name}}</h3>
                               </i>
                           </p>
{{--                           <i class="fa fa-heart ml-4  details_card_heart"></i>--}}
                           <div class="nav-item ml-auto pr-5">
                               @if(\Illuminate\Support\Facades\Auth::user() !=null)
                                   <form action="{{route('user.wishlist.store')}}" method="POST" enctype="multipart/form-data" files="true">
                                       {!! csrf_field() !!}
                                       <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                                       <input name="product_id" type="text" value="{{$products->id}}" hidden/>
                                       <button class="btn"><i class="fa fa-heart"></i></button>



                                   </form>
                               @else
                                   <button class="btn"><i class="fa fa-heart"></i></button>

                               @endif

                               {{--                                    <button class="btn"><i class="fa fa-heart"></i></button>--}}

                           </div>
                       </nav>
                   </div>
                   <div class="bg">
                       <nav class="nav">
                           <div class="details_card_key">
                               <p>Key Features</p>

                           </div>
                           <div class="ml-auto">
                               <a href="#">See all details</a>
                           </div>
                       </nav>
                               <p>
                                   {{$products->short_description}}
                               </p>


                   </div>
                   <div class="details_card_delivery">

                           <p  class="">Delivery <a href="#">Details</a></p>

                   </div>
                   <div class="bg">
                       <nav class="nav">
                           <div class="details_card_prices">
                                <h4>kShs {{$products->unit_cost}}</h4>
                               <h6><i>KSh 25000</i></h6>
                           </div>
                           <div class="ml-auto details_card_button">
{{--                               @if(\Illuminate\Support\Facades\Auth::user() != null)--}}

{{--                                   <form action="{{route('user.add.cart')}}" method="POST" enctype="multipart/form-data" files="true">--}}
{{--                                       {!! csrf_field() !!}--}}
{{--                                       <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />--}}
{{--                                       <input name="product_id" type="text" value="{{$products->id}}" hidden/>--}}
{{--                                       <input name="quantity" type="text" hidden/>--}}
{{--                                       <button class="btn">Add to Cart</button>--}}
{{--                                   </form>--}}
{{--                                 @else--}}
{{--                                   <button class="btn">Add to Cart</button>--}}
{{--                               @endif--}}

{{--                                   <form action="{{route('user.add.cart')}}" method="POST" enctype="multipart/form-data" files="true">--}}
{{--                                       {!! csrf_field() !!}--}}
                                       @if(\Illuminate\Support\Facades\Auth::user() != null)




                                           {{--                                                <button class="btn"><i class="fa fa-cart-plus"></i></button>--}}
                                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$products->id}}">
                                       Add to Cart
                                   </button>
{{--                                           <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal{{$products->id}}">--}}
{{--                                               <button class="btn">Add to Cart</button>--}}
{{--                                           </button>--}}
                                       @else
                                           <a href="{{url('user/cart')}}"  class="btn btn-primary">Add to Cart</a>
                                       @endif
{{--                                   </form>--}}
                           </div>
                       </nav>
                   </div>



                </div>
                <div class="col-md-2 details_custom">
                    <div><h5>Sold By?</h5></div>
                    <div>
                        <h6>Muva Computer Shop</h6>
                    </div>
                    <div class="hr_custom"></div>
                    <div>
                        <h5>Delivery</h5>
                        <p>
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"
                        </p>
                    </div>

                </div>
            </div>
            <div class="row">
{{--            @endforeach--}}
               @include('assets.details.details_accordion')
            </div>
<div class="hr_custom">

</div>

                @include('assets.recently_viewed_navbar')
                <div class="hr_custom"></div>
                <div class="container">
                    @include('assets.recently_cards')
                </div>





        </div>

        @include('assets.footer.footer')


@endsection


<!-- Modal -->
@if(\Illuminate\Support\Facades\Auth::user() != null)
    @foreach($products as $product)
        <div class="modal fade" id="exampleModal{{$products->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal_custom">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">
                            {{$products->name}}
                        </h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="" style="width: 18rem;">
                                    <img src="{{asset('/products/images/featured/'.$products->featured_image_url)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="price_custom">
                                            <h5 class="text-blue font-italic">
                                                <span class="mr-1">KShs</span>
                                                {{$products->unit_cost}}
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
                                    <small>If it is to be delivered,<b>EXTRA CHARGES WILL BE ADDED</b>!!</small>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="2">
                                        <label class="custom-control-label" for="customRadioInline1"><b>Be delivered</b></label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="customRadioInline2"><b>No Deliverly</b></label>
                                    </div>
                                    <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                                    <input name="product_id" type="text" value="{{$products->id}}" hidden/>
                                    <input name="amount" type="text" value="{{$products->unit_cost}}" hidden/>
                                    <div>
                                        <label>Quantity</label>
                                        <input name="quantity" type="number"value="1"/>
                                    </div>
                                    @foreach($products->variant as $variant)
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

                                    <button  class="btn btn-primary" id="{{$products->id}}">Save changes</button>
                                                                <button class="btn"><i class="fa fa-cart-plus"></i></button>
                                </form>

                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">

                                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <button class="btn"><i class="fa fa-cart-plus"></i></button>
@endif