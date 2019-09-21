<form action="{{route('seller.region.store')}}" method="POST" enctype="multipart/form-data" files="true">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="region_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="region_cost">Price</label>
            <input type="text" name="region_cost" class="form-control" >
        </div>


    </div>
    <input type="submit" class="btn btn-success" value="Create">
</form>


    



