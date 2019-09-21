
<form action="{{route('admin.edit.constants',$constant->id)}}" method="Post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="col-md-offset-2">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{$constant->name}}" required>
            </div>
            <div class="form-group">
                <label for="value">Constant</label>
                <input type="text" name="value" class="form-control" value="{{$constant->value}}" required>
            </div>


        </div>
        <input type="submit" value="Edit" class="btn btn-success">

    </div>
</form>

    



