<form action="{{route('seller.offers.update',$offer->id)}}" method="POST" enctype="multipart/form-data" files="true">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Offer Name</label>
            <input type="text" name="offer" class="form-control" value="{{$offer ->offer}}">
        </div>
        <div class="form-group">
            <label for="name">Discount</label>
            <br>
            <small>Discount is in percentage</small>
            <input type="text" name="discount" class="form-control" value="{{$offer -> discount}}">
        </div>

        <div class="form-group">
            <label for="name">Start Date</label> <i><small>{{Carbon\Carbon::parse($offer->start_time)->format('d/m/y')}}</small></i>
            <input type="Date" name="start_date" class="form-control" >
        </div>

        <div class="form-group">
            <label for="name">End Date</label> <i><small>{{Carbon\Carbon::parse($offer->end_time)->format('d/m/y')}}</small></i>
            <input type="Date" name="end_date" class="form-control">
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Create">
</form>


    



