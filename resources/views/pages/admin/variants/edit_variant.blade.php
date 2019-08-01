
<form action="{{route('admin.variants.update',$variant->id)}}" method="Post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="type" class="form-control" value="{{$variant->type}}">
        </div>
        <input type="submit" value="Edit" class="btn btn-success">

    </div>
</form>

    



