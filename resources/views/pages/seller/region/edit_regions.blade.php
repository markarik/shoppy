<form action="{{route('seller.region.update',$region->id)}}" method="Post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="region_name" class="form-control" value="{{$region->region_name}}">
        </div>
        <div class="form-group">
            <label for="region_cost">Price</label>
            <input type="text" name="region_cost" class="form-control" value="{{$region->region_cost}}">
        </div>

        <input type="submit" value="Edit" class="btn btn-success btn_buy_now">

    </div>
</form>


    



