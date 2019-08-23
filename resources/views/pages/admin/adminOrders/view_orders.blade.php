@extends('layouts.admin_master')



@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection
@section('content')





        <div class="m-5">
            <p><b>Filter your downloads here . . . </b></p>
            <form action="{{route('admin.orderpdf.table')}}">
                <div class="row">
                    <div class="col">
                        <label for="inputEmail4">From</label>
                        <input type="date" class="form-control" name="from">
                    </div>
                    <div class="col">
                        <label for="inputEmail4">To</label>
                        <input type="date" class="form-control" name="to">
                    </div>

                    <div class="col">
                        <label for="inputEmail4">Search store name</label>
                        <select class="form-control" name="storename">
                            <option value="one">one</option>
                            <option value="one">one</option>
                            <option value="one">one</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Download">
                    </div>
                </div>
            </form>
        </div>

        <div class="table_formats">
        <h2 class="table_format">ORDERS</h2>

{{--        <button class="btn btn-success">DownLoad PDF</button>--}}
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
                        <td>{{$order->product->seller->store_name}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->product->unit_cost}}</td>
                        <td>{{$order->amount}}</td>
                        <td>{{Carbon\Carbon::parse($order->created_at)->format('d/m/y H:i:s')}}</td>
                        <td><a href="/admin/orders/pdf/{{$order->product->seller->id}}">PDF</a></td>

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