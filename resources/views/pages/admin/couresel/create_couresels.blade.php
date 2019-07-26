<form action="{{url('admin/couresels/store')}}" method="POST" enctype="multipart/form-data" files="true">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>


    </div>
    <input type="submit" class="btn btn-success" value="Create">
</form>


    



