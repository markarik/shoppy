

{{ Form::open(['action'=>['Seller\Pages\BrandController@update','id'=>$brand->id],'enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
                {!! csrf_field() !!}

                            <div class="col-md-offset-2">
                                <div class="form-group">
                                    {{form::label('name','Name')}}
                                    {{form::text('name',$brand->name,null,array('class' =>'form-control'))}}
                                </div>

                                <div class="form-group">
                                    {{form::label('category','Category')}}
                                    {{form::select('category',$categories,null,array('class' =>'form-control','placeholder'=>'select category'))}}
                                </div>


                            </div>

                         {{form::submit('edit',array('class' =>'btn btn-success'))}}
            {{ Form::close() }}


    



