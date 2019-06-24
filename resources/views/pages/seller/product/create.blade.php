@extends('layouts.master')
@section('content')

<h1>Add Product</h1>

<div class="row">

    <div class="col-md-8 col-md-offset-2">



                {{ Form::open(['enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
                {!! csrf_field() !!}
                <div class="form-group">
                    {{form::label('name','Name')}}
                    {{form::text('name',null,array('class' =>'form-control'))}}
                </div>
    
              <div class="form-group">
                        {{form::label('description','Description')}}
                        {{form::text('description',null,array('class' =>'form-control'))}}
                </div>
    
                <div class="form-group">
                        {{form::label('size','Size')}}
                        {{form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,array('class' =>'form-control'))}}
                </div>
                <div class="form-group">
                                {{form::label('price','Price')}}
                                {{form::text('price',null,array('class' =>'form-control'))}}
                        </div> <div class="form-group">
                                {{form::label('category_id','Category')}}
                                {{form::text('category_id',null,array('class' =>'form-control','placeholder'=>'Select Category'))}}
                        </div>
                {{--<div class="form-group">
                        {{form::label('category_id','Category')}}
                        {{form::select('category_id',null,array('class' =>'form-control','placeholder'=>'Select Category'))}}
                </div>--}}
    
                 <div class="form-group">
                        {{form::label('image','Image')}}
                        {{form::file('image',null,array('class' =>'form-control'))}}
                </div>
    
                {{form::submit('create',array('class' =>'btn btn-default'))}}
               
                
        {{ Form::close() }}
       --}}
    </div>
</div>
    
@endsection

