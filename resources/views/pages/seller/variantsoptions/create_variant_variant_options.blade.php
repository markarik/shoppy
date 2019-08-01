<form action="{{route('seller.variant_option.store')}}" method="POST" enctype="multipart/form-data" files="true">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="variant_id">Variant</label>
            <select class="form-control" name="variant_id">
                <option disabled selected value>Option</option>
                    @foreach($variants as $variant)
                    <option value="{{$variant->id}}">{{$variant->type}}
                    </option>
                    @endforeach

            </select>
        </div>
    </div>
    <input type="submit" class="btn btn-success" value="Create">
</form>


    



