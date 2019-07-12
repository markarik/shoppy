@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 create_product">
            <h1>Add Product</h1>
            {{ Form::open(['action'=>'Seller\Pages\ProductController@store','enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
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

           {{-- <div class="form-group">
                {{form::label('size','Size')}}
                {{form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,array('class' =>'form-control'))}}
            </div>--}}
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

            {{--<div class="form-group">
                    {{form::label('category_id','Category')}}
                    {{form::select('category_id',null,array('class' =>'form-control','placeholder'=>'Select Category'))}}
            </div>--}}


            {{--<div class="form-group">
                    {{form::label('category_id','Category')}}
                    {{form::select('category_id',null,array('class' =>'form-control','placeholder'=>'Select Category'))}}
            </div>--}}

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

        </div>
    </div>

    <script>
        CKEDITOR.replace('editor1');
    </script>

@endsection

@section('js')

@endsection


