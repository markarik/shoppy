@extends('layouts.master')

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

<h2 class="table_format">Brands</h2>
<table id="users-table" class="table table-hover table-condensed" style="width:80%">  
        <thead>  
            <tr>  
               <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>
                <th>Action</th>
              </tr>
        </thead>
        <tbody>
             @foreach ($brands as $brand)
                 <tr>
                  <td>{{$brand->id}}</td>
                     <td>{{$brand->name}}</td>
                     <td>{{$brand->category_name}}</td>
                     <td>{{\Carbon\Carbon::parse($brand->created_at)->format('d/m/y , h:m:s')}}</td>
                     <td>{{\Carbon\Carbon::parse($brand->updated_at)->format('d/m/y , h:m:s')}}</td>
                     <td>

                         <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal{{$brand->id}}" value="Edit"/>
                     </td>
                     <td><a href="/seller/brand/{{$brand->id}}">Delete</a></td>
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

<!-- Edit Modal -->
@foreach($brands as $brand)
<div class="modal fade" id="exampleModal{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                @include('pages.seller.brand.edit_brands')

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
                    @include('pages.seller.brand.create_brands')
            </div>
        </div>
    </div>
</div>

