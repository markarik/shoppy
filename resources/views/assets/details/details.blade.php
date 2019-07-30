@extends('layouts.app')

@section('content')

        <div class="container-fluid">
            @foreach($products as $product)
            <div class="row details_row">
                <div class="col-md-1 other_images_column imagescrollwrapper">


                            <div class="details_other_images imagescrollimg">
                                <img src="{{asset('images/L1.jpg')}}">
                            </div>



                            <div class="details_other_images imagescrollimg">
                                <img src="{{asset('images/L1.jpg')}}">
                            </div>


                            <div class="details_other_images imagescrollimg">
                                <img src="{{asset('images/L1.jpg')}}">
                            </div>

                    <div class="details_other_images imagescrollimg">
                        <img src="{{asset('images/L1.jpg')}}">
                    </div>
                    <div class="details_other_images imagescrollimg">
                        <img src="{{asset('images/L1.jpg')}}">
                    </div>
                    <div class="details_other_images imagescrollimg">
                        <img src="{{asset('images/L1.jpg')}}">
                    </div>
                    <div class="details_other_images imagescrollimg">
                        <img src="{{asset('images/L1.jpg')}}">
                    </div>



                </div>

                <div class="col-md-3  details_custom">
                    
                    <div class="details_image_custom">
                        <img src="{{asset('images/L1.jpg')}}" alt="">
                    </div>

                </div>
                <div class="col-md-4 details_custom">

                   <div class="details_card_custom">

                       <h3>Where does it come from?</h3>
                   </div>
                   <div class="">
                       <nav class="nav">
                           <p>By</p>

                           <p><i>Mac</i></p>


                           <i class="fa fa-heart ml-4  details_card_heart"></i>
                       </nav>
                   </div>
                   <div class="bg">
                       <nav class="nav">
                           <div class="details_card_key">
                               <p>Key Features</p>

                           </div>
                           <div class="ml-auto">
                               <a href="">See all details</a>
                           </div>
                       </nav>
                               <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"</p>


                   </div>
                   <div class="details_card_delivery">

                           <p  class="">Delivery <a href="">Details</a></p>

                   </div>
                   <div class="bg">
                       <nav class="nav">
                           <div class="details_card_prices">
                                <h4>kShs 20000</h4>
                               <h6><i>KSh 25000</i></h6>
                           </div>
                           <div class="ml-auto details_card_button">
                               @if(\Illuminate\Support\Facades\Auth::user() != null)

                                   <form action="{{route('user.add.cart')}}" method="POST" enctype="multipart/form-data" files="true">
                                       {!! csrf_field() !!}
                                       <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                                       <input name="product_id" type="text" value="{{$product->id}}" hidden/>
                                       <input name="quantity" type="text" hidden/>
                                       <button class="btn">Add to Cart</button>
                                   </form>
                                 @else
                                   <button class="btn">Add to Cart</button>
                               @endif
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
            @endforeach
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