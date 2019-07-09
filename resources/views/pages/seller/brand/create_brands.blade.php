{{ Form::open(['action'=>'BrandController@store','enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
                {!! csrf_field() !!}
     <div class="col-md-offset-2">
         <div class="form-group">
             {{form::label('name','Name')}}
             {{form::text('name',null,array('class' =>'form-control'))}}
         </div>
     </div>
     {{form::submit('create',array('class' =>'btn btn-success'))}}
{{ Form::close() }}


    



