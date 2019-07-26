@extends('layouts.admin_master')
@section('content')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection
<div class="table_formats">

<h2 class="table_format">Featured Products</h2>
<table id="users-table" class="table table-hover table-condensed" style="width:80%">  
        <thead>  
            <tr>  
                <th>Id</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Action</th>  
              </tr>  
        </thead>
        <tbody>



            @foreach ($featured as $feature)
        <tr>

            <td>{{$feature->id}}</td>
            <td>{{$feature->name}}</td>
            <td>{{$feature->brand_name}}</td>
            <td>{{$feature->unit_cost}}</td>
            <td>{{$feature->created_at}}</td>
            <td>{{$feature->updated_at}}</td>
            <td>
            <form action="#" method="POST">
                @csrf
                <input type="submit" class="btn btn-danger" value="Remove">
            </form>
            </td>
        </tr>
                    @endforeach

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
