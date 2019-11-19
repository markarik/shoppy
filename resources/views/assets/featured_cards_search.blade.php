@extends('layouts.app')
@section('content')

    {{--    @include('assets.featured_navbar')--}}

    <div class="row">
        <div class="col-sm-2 mt-3 ml-3 mb-5">

            @include('assets.category.category')


        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="breadcrumb category_breadcrumbs">
                                <div class="page-header float-left">
                                    <div class="page-title">
                                        <ol class="breadcrumb breadcrumb_list">
                                            <li class="breadcrumb-item active"><a href="#">Featured Products</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8">
                            <form action="{{route('user.view.featured')}}">
                                {{--                        {{@csrf_field()}}--}}
                                <nav class="nav featured_nav_class">
                                    {{--                        <a class="nav-link active" href="#">Active</a>--}}
                                    {{--                        <a class="nav-link" href="#">Link</a>--}}
                                    {{--                        <a class="nav-link" href="#">Link</a>--}}

                                    <div>
                                        <label for="">From</label>
                                        {{--                                    <input type="range" name="from" min="0" max="500000" class="slider"--}}
                                        {{--                                           onchange="updateTextInput1(this.value);">--}}

                                        <input type="text" name="from" value="" placeholder="From">


                                    </div>




                                    <div>
                                        <label for="">To </label>
                                        {{--                                    <input type="range" name="to" min="0" max="500000" class="slider"--}}
                                        {{--                                           onchange="updateTextInput2(this.value);">--}}

                                        <input type="text" name="to" value="" placeholder="To">


                                    </div>

                                    <div>

                                        <input type="submit" value="OK" class="btn">


                                    </div>



                                </nav>
                            </form>
                            @include('flash-message')


                        </div>


                    </div>


                </div>
            </div>

            <div class="container-fluid">


                <div class="row">
                    @foreach($featured as $product)

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
            </div>
        </div>
    </div>


    @include('assets.footer.footer')


@endsection
@section('js')

    <script>
        // var slider = document.getElementById("myRange");
        // var output = document.getElementById("demo");
        // output.innerHTML = slider.value; // Display the default slider value
        //
        // // Update the current slider value (each time you drag the slider handle)
        // slider.oninput = function() {
        //     output.innerHTML = this.value;
        // }
        function updateTextInput1(val) {
            document.getElementById('textInput1').value = val;
        }


        function updateTextInput2(val) {
            document.getElementById('textInput2').value = val;
        }
    </script>

@endsection
