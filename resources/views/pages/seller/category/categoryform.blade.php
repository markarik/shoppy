{{--
{{ Form::open(['action'=>'CategoriesController@store','enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
{!! csrf_field() !!}
<div class="form-group">
    {{form::label('name','Name')}}
    {{form::text('name',null,array('class' =>'form-control'))}}
</div>



{{form::submit('create',array('class' =>'btn btn-default'))}}


{{ Form::close() }}  --}}



<h1>Add Me</h1>
