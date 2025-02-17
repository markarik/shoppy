@extends('layouts.admin_master')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('font.css.all.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

@endsection

@section('content')
    @include('flash-message')
    <div class="table_formats">


        <button type="button" class="btn btn-success button_add" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus fa-1x"></i>
        </button>
        <h2 class="table_format">Categories</h2>

        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Created</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach ( $categories  as $category)
                <tr>
                    <td>{{ $category ->id}}</td>
                    <td>{{ $category ->name}}</td>
                    @if($category->parent_id != null)
                        <td>{{ $category ->parent}}</td>
                    @else
                        <td>NULL</td>
                    @endif
                    <td>{{ $category ->created_at}}</td>
                    <td>

                        <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal{{$category->id}}" value="Edit"/>
                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection




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



<!-- Edit Modal -->
@foreach($categories as $category)
    <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Brand
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--Includes--}}
                    @include('pages.admin.categories.edit_categories')

                </div>

            </div>
        </div>
    </div>
@endforeach


<!-- ADD Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Categories
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('pages.admin.categories.categoryformadd')
            </div>

        </div>
    </div>
</div>

