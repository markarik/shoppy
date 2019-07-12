


{{--{{ Form::open(['action'=>'Seller\Pages\BrandController@store','enctype'=>'multipart/form-data','method'=>'POST','files'=>true]) }}
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
            {{ Form::close() }}--}}



<form action="{{route('seller.product.store')}}" method="POST" enctype="multipart/form-data" files="true">
    {!! csrf_field() !!}
    <div class="col-md-offset-2">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <select>
                <option>
                    @foreach($categories as $category)
                    {{$category->name}}
                    @endforeach
                </option>
            </select>
        </div>


    </div>
</form>


    



