@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 create_product">
            <h1>Add Product</h1>
            <form action="{{url('seller/products')}}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <input type="text" class="form-control" name="short_description">
                </div>
                <div class="form-group">
                    <label for="long_description">Long Description</label>
                    <textarea name="long_description" id="editor1" cols="30" rows="10" placeholder="Long Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="unit_cost">Price</label>
                    <input type="text" class="form-control" name="unit_cost">
                </div>
                <div class="form-group">
                    <label for="quantity">Number of Items</label>
                    <input type="number" class="form-control" name="quantity">
                </div>
                <div class="form-group">
                    <label for="brand_id">Brand</label>
                    <select class="form-control" name="brand_id">

                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
{{--                    <input type="text"  class="form-control" name="brand_id" placeholder="Select Brand">--}}
                </div>
                <div class="form-group">
                    <label for="image">Featured Image</label>
                    <input type="file" class="" name="featured_image">
                </div>
                <div class="form-group">
                    <label for="image">Image 2</label>
                    <input type="file" class="" name="image2">
                </div>
                <div class="form-group">
                    <label for="image">Image 3</label>
                    <input type="file" class="" name="image3">
                </div>
                <div class="form-group">
                    <label for="image">Image 4</label>
                    <input type="file" class="" name="image4">
                </div>

                <button class="btn btn-success">Save</button>
{{--                <input type="submit" class="btn btn-success" value="Save">--}}
            </form>

        </div>
    </div>

    <script>
        CKEDITOR.replace('editor1');
    </script>

@endsection

@section('js')

@endsection


