@extends('layouts.admin_master')

@section('css')



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('font.css.all.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

@endsection

@section('content')

    <div class="table_formats">

        <button type="button" class="btn btn-success button_add" data-toggle="modal" data-target="#exampleADDModal">
            <i class="fas fa-plus fa-1x"></i>
        </button>

        <h2 class="table_format">
            Variant
        </h2>
        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($variants as $variant)
                <tr>
                    <td>{{$variant->id}}</td>
                    <td>{{$variant->type}}</td>
                    <td>{{Carbon\Carbon::parse($variant->created_at)->format('d/m/y,H:i:s')}}</td>
                    <td>{{Carbon\Carbon::parse($variant->updated_at)->format('d/m/y,H:i:s')}}</td>
                    <td>

                        <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal{{$variant->id}}" value="Edit"/>
                    </td>
                    <td><a href="/seller/brand/{{$variant->id}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @endsection

    </div>

@section('js')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="{{asset('font/js/all.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection






<!-- ADD variant-->
<div class="modal fade" id="exampleADDModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Add Variant
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('pages.admin.variants.create_variant')
            </div>
        </div>
    </div>
</div>


<!-- Edit Vriant Modal -->
@foreach($variants as $variant)
    <div class="modal fade" id="exampleModal{{$variant->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Variant
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--Includes--}}
                    @include('pages.admin.variants.edit_variant')


                </div>

            </div>
        </div>
    </div>
@endforeach



