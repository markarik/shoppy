@extends('layouts.admin_master')


@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection

@section('content')
<div class="table_formats">

    <h2 class="table_format">Products</h2>
    <table id="users-table" class="table table-hover table-condensed" style="width:80%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Price</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>


        @foreach ($products as $product)
            <tr>

                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->brand_name}}</td>
                <td>{{$product->unit_cost}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                <td>
                        <a href="{{route('product.change.status',['product_id'=>$product->id])}}" type="submit"


                    @if($product->status == 2)
                        class="btn btn-success"
                         @else
                           class="btn btn-danger"
                           @endif
                        >{{$product->status_text}}</a>

{{--                        <a href="{{route('product.change.status',['product_id'=>$product->id])}}" type="submit"--}}

                </td>
            </tr>
        @endforeach

        </tbody>

    </table>


    @endsection

</div>

@section('js')

    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection
