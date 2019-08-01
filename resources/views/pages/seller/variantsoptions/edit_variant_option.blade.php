
<form action="{{route('seller.variants_option.update',$variantsoption->id)}}" method="Post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{$variantsoption->name}}">
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
        <input type="submit" value="Edit" class="btn btn-success">

    </div>
</form>

    



