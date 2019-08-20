@extends('layouts.admin_master')



@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection
@section('content')
    <div class="table_formats">
        <h2 class="table_format">ORDERS</h2>

        <button class="btn btn-success">DownLoad PDF</button>
        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Buyer</th>
                <th>Seller</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Ordered On</th>
                <th>Action</th>

            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->user->f_name}}</td>
                        <td>{{$order->store_name}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->product->unit_cost}}</td>
                        <td>{{$order->amount}}</td>
                        <td>{{Carbon\Carbon::parse($order->created_at)->format('d/m/y')}}</td>
                        <td><a href="/admin/orders/pdf/{{$order->id}}">PDF</a></td>

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