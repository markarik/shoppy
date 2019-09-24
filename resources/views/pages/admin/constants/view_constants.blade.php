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
            Constants
        </h2>

        <table id="users-table" class="table table-hover table-condensed" style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Constant</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            </thead>
            @foreach($constants as $constant)
                <tbody>
                    <tr>
                        <td>{{$constant->id}}</td>
                        <td>{{$constant->name}}</td>
                        <td>{{$constant->value}}</td>
                        <td>{{$constant->created_at}}</td>
                        <td>{{$constant->updated_at}}</td>

                        <td class="d-flex p-0">

{{--                            <a href="" class="btn btn-success cart_button ml-2">edit</a>--}}

                            <input type="button" class="btn btn-success button_constants ml-2" data-toggle="modal" data-target="#exampleModal{{$constant->id}}" value="Edit"/>
                            <form action="{{route('admin.delete.constants',['id'=>$constant->id])}}" method="post">
                                {!! csrf_field() !!}
                                <input type="submit" class="btn btn-danger button_constants ml-4" value="Remove">

                            </form>


                        </td>
                    </tr>
                </tbody>
            @endforeach
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
                    Add Constant
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('pages.admin.constants.create_constants')
            </div>
        </div>
    </div>
</div>


<!-- Edit Setting Modal -->
@foreach($constants as $constant)
    <div class="modal fade" id="exampleModal{{$constant->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Constant
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--Includes--}}
                    @include('pages.admin.constants.edit_constant')


                </div>

            </div>
        </div>
    </div>
@endforeach



