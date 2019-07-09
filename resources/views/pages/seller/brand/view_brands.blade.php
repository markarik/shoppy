@extends('layouts.master')
@section('content')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection
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
              </tr>  
        </thead>
        <tbody>
        <tr>
            <td>Name</td>
            <td>Name</td>
            <td>Name</td>
            <td>Name</td>
            <td>Name</td>
            <td>

               {{-- <button type="button" class="btn btn-success button_edit" data-toggle="modal" data-target="#exampleModal">
                    Edit
                </button>--}}
                <input type="button" class="button_edit" data-toggle="modal" data-target="#exampleModal" value="Edit"/>
            </td>
        </tr>
           {{-- @if(count($products)>1)
  
              @foreach ($products as $product)
{{--                <tr>--}}
{{--                  <td>{{$product->id}}</td>       --}}
{{--                  <td>{{(($product->categories)>0)?$product->category->name:"N/A"}}</td>           --}}
{{--                  <td>{{$product->name}}</td>--}}
{{--                  <td>{{$product->created_at}}</td>--}}
{{--                  <td>{{$product->updated_at}}</td>--}}
{{--                  <td><a href="/admin/product/{{$product->id}}">Delete</a></td>                  --}}
{{--                </tr>         --}}
{{--              @endforeach--}}
{{--            @else--}}
{{--              <p>No Category Found</p>--}}
{{--            @endif--}}
        </tbody>
    
      </table>
  
      
    
        
@endsection

</div>

@section('js')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection

<!-- Edit Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{--Includes--}}

                <h1>EDIT</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>



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
                {{--Includes--}}
                    @include('pages.seller.brand.create_brands')
            </div>
           {{-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save</button>
            </div>--}}
        </div>
    </div>
</div>