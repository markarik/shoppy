@extends('layouts.master')



@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
@endsection
@section('content')
    <div class="table_formats">
        <h2 class="table_format">ORDERS</h2>



        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Buyer</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Created</th>

            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->user->f_name}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->unit_cost}}</td>
                        <td>{{$order->amount}}</td>
                        <td>{{\Carbon\Carbon::parse($order->created_at)->format('d/m/y')}}</td>



                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

@endsection


@section('js')

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>






    <script>
        $(document).ready(function() {
            $('#users-table').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );


    </script>

@endsection