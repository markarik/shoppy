

{{ Form::open(['action'=>'Seller\Pages\BrandController@update','enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
                {!! csrf_field() !!}

                            <div class="col-md-offset-2">
                                <div class="form-group">
                                    {{form::label('name','Name')}}
                                    {{form::text('name',null,array('class' =>'form-control'))}}
                                </div>

                                <div class="form-group">
                                    {{form::label('category','Category')}}
                                    {{form::select('category',$categories,null,array('class' =>'form-control','placeholder'=>'select category'))}}
                                </div>


                            </div>

                         {{form::submit('create',array('class' =>'btn btn-success'))}}
            {{ Form::close() }}


    



