@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 create_product">
            <h1>Add Product</h1>
            {{--{{ Form::open(['action'=>'Seller\Pages\ProductController@store','enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
            {!! csrf_field() !!}
            <div class="form-group">
                {{form::label('name','Name')}}
                {{form::text('name',null,array('class' =>'form-control'))}}
            </div>

            <div class="form-group">
                {{form::label('short_description','Short Description')}}
                {{form::text('short_description',null,array('class' =>'form-control'))}}
            </div>


            <div class="form-group">
                {{form::label('long_description','Long Description')}}
                {{form::textarea('long_description',null,array('class' =>'form-control','id'=>'editor1'))}}
            </div>

           --}}{{-- <div class="form-group">
                {{form::label('size','Size')}}
                {{form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,array('class' =>'form-control'))}}
            </div>--}}{{--
            <div class="form-group">
                {{form::label('unit_cost','Price')}}
                {{form::text('unit_cost',null,array('class' =>'form-control'))}}
            </div>

            <div class="form-group">
                {{form::label('quantity','Number of Items')}}
                {{form::Number('quantity',null,array('class' =>'form-control'))}}
            </div>


            <div class="form-group">
                {{form::label('brand_id','Brand')}}
                    {{form::select('brand_id',$brands,null,array('class' =>'form-control','placeholder'=>'Select Brand'))}}

            </div>

            --}}{{--<div class="form-group">
                    {{form::label('category_id','Category')}}
                    {{form::select('category_id',null,array('class' =>'form-control','placeholder'=>'Select Category'))}}
            </div>--}}{{--


            --}}{{--<div class="form-group">
                    {{form::label('category_id','Category')}}
                    {{form::select('category_id',null,array('class' =>'form-control','placeholder'=>'Select Category'))}}
            </div>--}}{{--

            <div class="form-group">
                {{form::label('image','Featured Image')}}
                {{form::file('featured_image',null,array('class' =>'form-control'))}}
            </div>

            <div class="form-group">
                {{form::label('image','Image 2')}}
                {{form::file('image2',null,array('class' =>'form-control'))}}
            </div>


            <div class="form-group">
                {{form::label('image','Image 3')}}
                {{form::file('image3',null,array('class' =>'form-control'))}}
            </div>
            <div class="form-group">
                {{form::label('image','Image 4')}}
                {{form::file('image4',null,array('class' =>'form-control'))}}
            </div>

            {{form::submit('CREATE',array('class' =>'btn btn-success'))}}


            {{ Form::close() }}
--}}
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


