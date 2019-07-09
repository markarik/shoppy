@extends('layouts.master')
@section('content')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection
<div class="table_formats">

<h2 class="table_format">Products</h2>
<table id="users-table" class="table table-hover table-condensed" style="width:80%">  
        <thead>  
            <tr>  
                <th>Id</th> 
                <th>Category</th>                  
                <th>Name</th>
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
                <input type="button" class="button_delete" data-toggle="modal" data-target="#exampleModal" value="Delete"/>
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
