@extends('layouts.app')

@section('content')

        <div class="container-fluid">
            <div class="row details_row">
                <div class="col-md-1 other_images_column">
                    <div>
                        <div>
                            <div class="details_other_images">
                                <h1>images</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="details_other_images">
                                <h1>images</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="details_other_images">
                                <h1>images</h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3  details_custom">
                    
                    <div class="details_image_custom">
                        <img src="{{asset('images/L1.jpg')}}" alt="">
                    </div>

                </div>
                <div class="col-md-4 details_custom">

                   <div class="">

                       <h3>Where does it come from?</h3>
                   </div>
                   <div class>
                       <nav class="nav">
                           <p>By</p>

                           <p><i>Mac</i></p>

                           <i class="fa fa-heart"></i>
                       </nav>
                   </div>
                   <div class="bg">
                       <nav class="nav">
                           <div>
                               <p>Key Features</p>

                           </div>
                           <div class="ml-auto">
                               <a href="">See all details</a>
                           </div>
                       </nav>
                               <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"</p>


                   </div>
                   <div class="">
                       <div>
                           <p  class="ml-auto">Delivery <a href="">Details</a></p>
                       </div>
                   </div>
                   <div class="bg">
                       <nav class="nav">
                           <div>
                                <h4>kShs 20000</h4>
                               <h4><i>25000</i></h4>
                           </div>
                           <div class="ml-auto">
                               <form>
                                   <button class="btn btn-success">Buy Now</button>
                               </form>
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
               @include('assets.details.details_accordion')
            </div>


                @include('assets.recently_viewed_navbar')
                <div class="hr_custom"></div>
                <div class="container">
                    @include('assets.recently_cards')
                </div>





        </div>

        @include('assets.footer.footer')


@endsection