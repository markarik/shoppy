<form action="{{route('admin.variants.store')}}" method="POST" enctype="multipart/form-data" files="true">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="type" class="form-control" required>
        </div>

{{--        <div class="form-group">--}}
{{--            <label for="category_id">Category</label>--}}
{{--            <select class="form-control" name="category_id">--}}
{{--                <option disabled selected value>Category</option>--}}
{{--                    @foreach($categories as $category)--}}
{{--                    <option value="{{$category->id}}">{{$category->name}}--}}
{{--                    </option>--}}
{{--                    @endforeach--}}

{{--            </select>--}}
{{--        </div>--}}
    </div>
    <input type="submit" class="btn btn-success" value="Create">
</form>


    



