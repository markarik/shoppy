   <h2>Products</h2>
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
            <td>id</td>
            <td>category</td>
            <td>name</td>
            <td>time start</td>
            <td>time end</td>
            <td>Delete</td>
        </tr>

        </tbody>

    </table>
@section('js')

    <script>
        $(document).ready( function () {
            $('#users-table').DataTable();
        } );
    </script>

@endsection