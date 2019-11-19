@extends('layouts.master')


@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection
@section('content')
    @include('flash-message')
<div class="table_formats">

<h2 class="table_format">Products</h2>
<table id="users-table" class="table table-hover table-condensed" style="width:80%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Place Offer</th>
{{--                <th>Edit</th>--}}
                <th>Created</th>
                <th>Action</th>
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
            <td>
                <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal{{$product->id}}" value="Offer"/>
            </td>
            <td>{{Carbon\Carbon::parse($product->created_at)->format('d/m/y')}}</td>
            <td>
{{--                <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal{{$product->id}}" value="Edit"/>--}}
                <a href="{{route('seller.product.edit',['id'=>$product->id])}}" type="button" class=" button_edit">Edit</a>

            </td>
            <td>


            <form action="{{route('seller.delete.product',['id'=>$product->id])}}" method="POST">
                @csrf
                <input type="submit" value="Delete">
            </form>
            </td>
        </tr>
                    @endforeach

        </tbody>

      </table>




@endsection

</div>

@section('js')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection



{{--modal--}}

@foreach($products as $product)
    <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <small>Place offer to ..</small> {{$product->name}}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--Includes--}}
                    @include('pages.seller.offers.create_offer')

                </div>

            </div>
        </div>
    </div>
@endforeach