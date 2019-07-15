<form action="{{route('seller.brand.update',$brand->id)}}" method="Post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$brand->name}}">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
           <select class="form-control" name="category">
               @foreach($categories as $category)
                   <option value="{{$category -> id}}">{{$category->name}}</option>
               @endforeach
           </select>
        </div>
        <input type="submit" value="Edit" class="btn btn-success">

    </div>
</form>


    



