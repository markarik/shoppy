@extends('layouts.master')

@section('content')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection

    <div class="table_formats">
        <h2 class="table_format">ORDERS</h2>
        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Buyer</th>
                <th>CheckOut</th>
                <th>Quantity</th>
                <th>Created</th>
                <th>Updated</th>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->product_name}}</td>
                        <td>{{$order->user_name}}</td>
                        <td>{{$order->checkout_id}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

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