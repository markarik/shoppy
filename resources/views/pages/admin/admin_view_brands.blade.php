@extends('layouts.admin_master')

@section('css')



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('font.css.all.css')}}">

@endsection

@section('content')
<div class="table_formats">

{{--    <button type="button" class="btn btn-success button_add" data-toggle="modal" data-target="#exampleADDModal">--}}
{{--        <i class="fas fa-plus fa-1x"></i>--}}
{{--    </button>--}}

<h2 class="table_format">Brands</h2>
<table id="users-table" class="table table-hover table-condensed" style="width:80%">  
        <thead>  
            <tr>  
               <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Created</th>
                <th>Updated</th>


              </tr>
        </thead>
        <tbody>
             @foreach ($brands as $brand)
                 <tr>
                  <td>{{$brand->id}}</td>
                     <td>{{$brand->name}}</td>
                     <td>{{$brand->getCategoryNameAttribute()}}</td>
                     <td>{{\Carbon\Carbon::parse($brand->created_at)->format('d/m/y ,h:m:s')}}</td>
                     <td>{{\Carbon\Carbon::parse($brand->updated_at)->format('d/m/y ,h:m:s')}}</td>


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







