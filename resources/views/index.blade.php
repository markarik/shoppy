@extends('layouts.app')
@section('title')

    Shoppy

@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('content')


    <div class="row">

        <div class="col-sm-2 categories">
            @include('assets.category.category')
        </div>

        <div class="col-sm-7 class_couresels">

            <div>
                @include('assets.carousel')

            </div>

            <div class="row">

                @include('assets/product_slider_cards')

            </div>
        </div>

        <div class="col-sm-2">
            <h5 class="card-title featured_products_heading">FeaturedProducts</h5>

            <div class="small_images">
                <a href="{{route('user.view.featured.products')}}"><img src="{{asset('products/images/featured/'.$featuredImage->featured_image_url)}}"
                                 alt="image" class="small_image"></a>

{{--                                <img src="{{asset('images/L2.jpg')}}" alt="image" class="small_image">--}}
            </div>
        </div>

        {{--        <div class="col-md-2 categories">--}}


        {{--        </div>--}}

        {{--        <div class="col-md-8 class_couresels">--}}

        {{--            <div>--}}

        {{--            </div>--}}
        {{--            <div>--}}


        {{--            </div>--}}

        {{--        </div>--}}

        {{--        <div class="col-md-2">--}}
        {{--            @include('assets.carousel')--}}
        {{--            jhgfckhg--}}

        {{--        </div>--}}
    </div>
    <div class="col-md-12">
        {{--        <div class="container">--}}
        {{--            @include('assets.featured_cards')--}}
        {{--        </div>--}}
        @include('flash-message')

        {{--        @include('assets.Products_navbar')--}}

        <div class="container-fluid">

            @include('assets/product_cards')
        </div>

        <div>
            {{--            @include('assets.recently_viewed_navbar')--}}
        </div>

        <div class="container">
            {{--            @include('assets.recently_cards')--}}
        </div>
        <div>
            @include('assets.footer.footer')
        </div>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

@endsection
<script>
    $(document).ready(function () {
        var arrow = document.getElementsByClassName('arrow_up');
        var dropdown = document.getElementsByClassName('side-nav_dropdown');

        var status = false;

        $('#dropdown').click(function (event) {

            event.preventDefault();
            alert(o);

        })
    });
</script>
