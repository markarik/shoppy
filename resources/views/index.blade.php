@extends('layouts.app')
@section('title')

    Shoppy

@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">
            @include('assets.carousel')

            @include('assets.featured_navbar')

            <div class="hr_custom"></div>

            <div class="container">
            @include('assets.featured_cards')
            </div>

            @include('assets.Products_navbar')

            <div class="container">
                @include('assets/product_cards')
            </div>

            <div>
                @include('assets.recently_viewed_navbar')
            </div>

            <div class="container">
                @include('assets.recently_cards')
            </div>
            <div>
                @include('assets.footer.footer')
            </div>
        </div>

    </div>

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
