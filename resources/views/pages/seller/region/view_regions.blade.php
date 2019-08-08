@extends('layouts.master')

@section('css')



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('font.css.all.css')}}">

@endsection

@section('content')
    @include('flash-message')
<div class="table_formats">

    <button type="button" class="btn btn-success button_add" data-toggle="modal" data-target="#exampleADDModal">
        <i class="fas fa-plus fa-1x"></i>
    </button>

<h2 class="table_format">Regions</h2>
<table id="users-table" class="table table-hover table-condensed" style="width:80%">  
        <thead>  
            <tr>  
{{--               <th>Id</th>--}}
                <th>Name</th>
                <th>Price</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>

              </tr>
        </thead>
        <tbody>
             @foreach ($regions as $region)
                 <tr>
{{--                  <td>{{$region->id}}</td>--}}
                     <td>{{$region->region_name}}</td>
                     <td>{{$region->region_cost}}</td>
                     <td>{{$region->created_at}}</td>
                     <td>{{$region->updated_at}}</td>
                     <td>

                         <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal{{$region->id}}" value="Edit"/>
                     </td>

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

<!-- Edit Modal -->
@foreach($regions as $region)
<div class="modal fade" id="exampleModal{{$region->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Edit Regions
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{--Includes--}}
                @include('pages.seller.region.edit_regions')

            </div>

        </div>
    </div>
</div>
@endforeach




<!-- ADD Modal -->
<div class="modal fade" id="exampleADDModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                   Add Brand
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    @include('pages.seller.region.create_regions')
            </div>
        </div>
    </div>
</div>

