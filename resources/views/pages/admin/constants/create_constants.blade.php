<form action="{{route('admin.store.constants')}}" method="POST" enctype="multipart/form-data" files="true">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="value">Constant</label>
            <input type="text" name="value" class="form-control" required>
        </div>


    </div>
    <input type="submit" class="btn btn-success" value="Create">
</form>


    



