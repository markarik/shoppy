@extends('layouts.master')



@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/download.css')}}">

@endsection
@section('content')

    @include('flash-message')

    <div class="m-5">
        <p><b>Filter your downloads here . . . </b></p>
        <form action="{{route('seller.orderpdf.table')}}">
            <div class="row download_row">

                <div class="col">
                    <label for="inputEmail4">Buyer Name</label>
                    <input type="text" class="form-control buyer_download" name="buyer_name">
                </div>
                <div>
                    <input type="submit" class="btn btn-success" value="Download">
                </div>
            </div>
        </form>
    </div>



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