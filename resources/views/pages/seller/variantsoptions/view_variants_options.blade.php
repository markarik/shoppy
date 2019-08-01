@extends('layouts.master')

@section('css')



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('font.css.all.css')}}">

@endsection

@section('content')

    <div class="table_formats">

        <button type="button" class="btn btn-success button_add" data-toggle="modal" data-target="#exampleADDModal">
            <i class="fas fa-plus fa-1x"></i>
        </button>

        <h2 class="table_format">
            Variant Options
        </h2>
        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Variant</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($variantsoptions as $variantsoption)
                <tr>
                    <td>{{$variantsoption->id}}</td>
                    <td>{{$variantsoption->name}}</td>
                    <td>{{$variantsoption->variant->type}}</td>
                    <td>{{$variantsoption->created_at}}</td>
                    <td>{{$variantsoption->updated_at}}</td>
                    <td>

                        <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal{{$variantsoption->id}}" value="Edit"/>
                    </td>
                    <td><a href="/seller/brand/{{$variantsoption->id}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @endsection

    </div>

@section('js')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="{{asset('font/js/all.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection






<!-- ADD variant options -->
<div class="modal fade" id="exampleADDModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Add variant option
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('pages.seller.variantsoptions.create_variant_variant_options')
            </div>
        </div>
    </div>
</div>

<!-- Edit Variant option Modal -->
@foreach ($variantsoptions as $variantsoption)
    <div class="modal fade" id="exampleModal{{$variantsoption->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit variant Option
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--Includes--}}
                    @include('pages.seller.variantsoptions.edit_variant_option')


                </div>

            </div>
        </div>
    </div>
@endforeach


