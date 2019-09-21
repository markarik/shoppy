@extends('layouts.master')



@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection
@section('content')
    <div class="table_formats">
        <h2 class="table_format">Undelivered Orders</h2>
        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Buyer</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
                <th>Created</th>

            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->id}}</td>
                        <td>{{$order->id}}</td>
                        <td>{{$order->id}}</td>
                        <td>{{$order->id}}</td>
                        <td>{{$order->id}}</td>

                        <td>{{$order->created_at}}</td>

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


