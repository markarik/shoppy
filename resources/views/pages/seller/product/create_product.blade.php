@extends('layouts.master')


@section('content')
    <div class="create_product">
        <h1>Add Product</h1>
        <form action="{{url('seller/products')}}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label for="quantity">Number of Items</label>
                    <small class="input_number" > Input a Number Greater Than Zero(0)</small>
                    <input type="number" class="form-control" name="quantity" id="number_items" min="0">
                </div>

            </div>

            <div class="form-group">
                <label for="unit_cost">Price</label>
                <input type="text" class="form-control" name="unit_cost">
            </div>

            <div class="form-group">
                <label for="brand_id">Brand</label>
                <select class="form-control" name="brand_id">
                    <option disabled="true" selected="true" value="0">Brand</option>

                    @foreach($brands as $brand)

                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group ">
                <label for="short_description">Short Description</label>
                <textarea name="long_description" id="editor1" cols="30" rows="10"
                          placeholder="Long Description"></textarea>
            </div>

            <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea name="long_description" id="editor2" cols="30" rows="10"
                          placeholder="Long Description"></textarea>
            </div>
            <div class="col-md-10 d-flex class_images">
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
            </div>
            <div class="row">
                @foreach($variants as $variant)
                    <div class="col-md-3">

                        <div class="form-group">

                            <label for="{{$variant->type}}">{{$variant->type}}</label>

                            @if(count($variant->variant_option) != 0)
                                <select multiple class="form-control" id="exampleFormControlSelect2"
                                        name="option[{{$variant->type}}][]">
                                    @foreach($variant->variant_option as $option)
                                        <option value="{{$option->id}}">{{$option->name}}</option>
                                    @endforeach
                                </select>
                            @else
                                <select class="form-control" name="variantoptions_id">
                                    <option value="no options" selected disabled>No Options Yet</option>
                                </select>
                            @endif


                        </div>
                    </div>
                @endforeach


            </div>


            <button type="submit" class="btn btn-success mb-3" id="submit_button">Save</button>
        </form>

    </div>
@endsection

@section('js')
    <script>
        const numberInput = document.getElementById('number_items');
        const submitButton = document.getElementById('submit_button');

        numberInput.addEventListener('input',($event)=>{

            if($event.target.value <= 0){
                submitButton.setAttribute('disabled');
            }else{
                submitButton.removeAttribute('disabled');
            }


        });
    </script>
    <script>
        CKEDITOR.replace('editor1');
    </script>

    <script>
        CKEDITOR.replace('editor2');
    </script>
@endsection



