@extends('layouts.master')
@section('title')
    Shoppy
@endsection
@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection
@section('content')
    <div class="row mt-3 ml-5">
        @include('pages.seller.layout.includes.card')
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 mt-5">
            @include('pages.seller.layout.includes.table1')
        </div>
    </div>
@endsection
@section('js')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection

