@extends('layouts.admin_master')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection

@section('content')

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
                <th>Status</th>
                <th>Status</th>


            </thead>
            <tbody>


            @foreach ($stores as $store)
                <tr>

                    <td>{{$store->id}}</td>
                    <td>{{$store->f_name}} {{$store->l_name}}</td>
                    <td>{{$store->store_name}}</td>
                    <td>{{$store->business_no}}</td>
                    <td>
                        <input type=button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" value="Activate"/>
                    </td>
                    <td>
                        <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal" value="{{$store->status}}"/>
                    </td>

                    <td>
                        <input type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" value="Deactivate"/>
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