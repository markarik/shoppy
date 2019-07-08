@extends('layouts.master')
@section('title')
    Shoppy
@endsection
@section('content')
    <div class="row mt-3">
    @include('pages.seller.layout.includes.card')
        <div class="row">
            <div class="col-md-12 ml-5 mt-3">
            @include('pages.seller.layout.includes.table1')
            </div>
        </div>
    </div>
@endsection