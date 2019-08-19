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
                <th>Amount</th>
                <th>Created</th>
                <th>Action</th>

            </thead>
            <tbody>
            @foreach ($orders as $order)
                @for($i=0; $i<count($order->undelivered_orders);$i++)
                    <tr>
                        <td>{{$order->undelivered_orders[$i]->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->user->f_name}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->unit_cost}}</td>
                        <td>{{$order->amount}}</td>
                        <td>{{Carbon\Carbon::parse($order->created_at)->format('d/m/y')}}</td>
                        <td>
                            <a href="{{route('seller.order.status',['order_id'=>$order->undelivered_orders[$i]->id])}}"
                               type="submit"
                               @if($order->undelivered_orders[$i]->seller_delivery_status == "pending")
                               class="btn btn-danger"
                               @else
                               class="btn btn-success"
                                    @endif
                            >{{$order->undelivered_orders[$i]->seller_delivery_status}}</a>
                        </td>
                    </tr>
                @endfor
            @endforeach
            </tbody>

        </table>

    </div>

@endsection


@section('js')

    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection