@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 create_product">
                    <h1>Add Product</h1>
                {{ Form::open(['enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
                {!! csrf_field() !!}
                            <div class="form-group">
                                {{form::label('name','Name')}}
                                {{form::text('name',null,array('class' =>'form-control'))}}
                            </div>

                            <div class="form-group">
                                {{form::label('short-description','Short Description')}}
                                {{form::text('short-description',null,array('class' =>'form-control'))}}
                            </div>


                            <div class="form-group">
                                {{form::label('long-description','Long Description')}}
                                {{form::textarea('long-description',null,array('class' =>'form-control','name'=>'editor1'))}}
                            </div>

                            <div class="form-group">
                                {{form::label('size','Size')}}
                                {{form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,array('class' =>'form-control'))}}
                            </div>
                            <div class="form-group">
                                {{form::label('price','Price')}}
                                {{form::text('price',null,array('class' =>'form-control'))}}
                            </div> <div class="form-group">
                                {{form::label('brand_id','Brand')}}
                                {{form::text('brand_id',null,array('class' =>'form-control','placeholder'=>'Select Brand'))}}
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
                                {{form::label('image','Image')}}
                                {{form::file('image',null,array('class' =>'form-control'))}}
                            </div>
    
                {{form::submit('CREATE',array('class' =>'btn btn-success'))}}
               
                
        {{ Form::close() }}

    </div>
</div>

    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    
@endsection

@section('js')

@endsection


