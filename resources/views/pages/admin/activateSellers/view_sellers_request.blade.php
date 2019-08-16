@extends('layouts.admin_master')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection

@section('content')

    @include('flash-message');

    <div class="table_formats">
        <h2 class="table_format">Available stores</h2>
        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Seller Name</th>
                <th>Store Name</th>
                <th>Business Number</th>
                {{--            <th>Number of Items</th>--}}

                <th>Status</th>

            </tr>

            </thead>
            <tbody>


            @foreach ($stores as $store)
                <tr>

                    <td>{{$store->id}}</td>
                    <td>{{$store->f_name}} {{$store->l_name}}</td>
                    <td>{{$store->store_name}}</td>
                    <td>{{$store->business_no}}</td>

                    <td>
                        <a href="{{route('admin.Seller.status',['seller_id'=>$store->id])}}" type="submit"


                           @if($store->status == "active")
                           class="btn btn-success"
                           @else
                           class="btn btn-danger"
                                @endif
                        >{{$store->status}}</a>

                    </td>
                </tr>
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