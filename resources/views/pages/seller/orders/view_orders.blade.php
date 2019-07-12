@extends('layouts.master')

@section('content')

    <div class="table_formats">
        <h2 class="table_format">ORDERS</h2>
        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>User_Id</th>
                <th>CheckOut</th>
                <th>Quantity</th>
                <th>Created</th>
                <th>Updated</th>

            </thead>
            <tbody>
            @if(count($orders)>1)

                @foreach ($orders as $order)
                    <tr>

                        <td>{{$order->id}}</td>
                        <td>{{$order->Product_name}}</td>
                        <td>{{$order->Users_id}}</td>
                        <td>{{$order->checkout_id}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->updated_at}}</td>

                    </tr>
                @endforeach
                @else
                <p>No Orders Found</p>
            @endif
            </tbody>

        </table>

    </div>

@endsection