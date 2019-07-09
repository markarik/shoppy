


                {{ Form::open(['enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
                {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-offset-2">
                                <div class="form-group">
                                    {{form::label('name','Name')}}
                                    {{form::text('name',null,array('class' =>'form-control'))}}
                                </div>

                            </div>
                        </div>
                         {{form::submit('create',array('class' =>'btn btn-default'))}}
            {{ Form::close() }}


    



