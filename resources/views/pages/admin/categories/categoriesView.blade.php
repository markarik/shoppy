@extends('layouts.admin_master')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@endsection

@section('content')
    <div class="table_formats">
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
                        <Button class="btn btn-success">Edit</Button>
                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection

@section('js')

    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
        });
    </script>

@endsection



