@extends('layouts.app')
@section('title')

    Shoppy

@endsection
@section('content')


    <div class="row">
        @include('assets.carousel')
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
