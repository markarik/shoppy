<form action="{{url('seller/offers  ')}}" method="POST" enctype="multipart/form-data" files="true">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Offer Name</label>
            <input type="text" name="offer" class="form-control" >
        </div>

            <input type="text" name="product_id" class="form-control" hidden value="{{$product->id}}">



        <div class="form-group">
            <label for="name">Discount</label>
            <br>
            <small>Discount is in percentage</small>
            <input type="text" name="discount" class="form-control" >
        </div>

        <div class="form-group">
            <label for="name">Start Date</label>
            <input type="Date" name="start_date" class="form-control" >
        </div>

        <div class="form-group">
            <label for="name">End Date</label>
            <input type="Date" name="end_date" class="form-control" >
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Create">
</form>


    



