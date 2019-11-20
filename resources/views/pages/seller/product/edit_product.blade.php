@extends('layouts.master')


@section('content')
    @include('flash-message')




    <ul class="nav nav-pills m-5" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
               aria-controls="pills-home" aria-selected="true">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
               aria-controls="pills-profile" aria-selected="false">Variants</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
               aria-controls="pills-contact" aria-selected="false">Images</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

            <div class="create_product">
                <h1>Edit Product</h1>
                {{--        <form action="{{url('seller/products/edit')}}" method="post" enctype="multipart/form-data">--}}
                <form action="{{(route('seller.product.update',$product->id))}}" method="post"
                      enctype="multipart/form-data">
                    {!! csrf_field() !!}


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$product->name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="quantity">Number of Items</label>
                            <small class="input_number"> Input a Number Greater Than Zero(0)</small>
                            <input type="number" class="form-control" name="quantity" id="number_items" min="1"
                                   value="{{$inventory->quantity}}">
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="unit_cost">Price</label>
                        <input type="text" class="form-control" name="unit_cost" value="{{$product->unit_cost}}">
                    </div>

                    <div class="form-group">
                        <label for="brand_id">Brand</label>
                        <select class="form-control" name="brand_id">
                            <option selected="true"
                                    value="{{$product->brand_id}}">{{$product->brand_name}}</option>

                            @foreach($brands as $brand)

                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group ">
                        <label for="short_description">Short Description</label>
                        <textarea name="short_description" id="editor1" cols="15" rows="5"
                        >{{ $product->short_description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="long_description">Long Description</label>
                        <textarea name="long_description" id="editor2" cols="30" rows="10"
                                  placeholder="Long Description">{{$product->long_description}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-success mb-3" id="submit_button">Save</button>
                </form>

            </div>


        </div>
        <div class="tab-pane fade pl-5" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


            <form action="{{route('seller.product.update.variantoption',$product->id)}}" method="post">
                {{@csrf_field()}}
                <div class="row">
                    @foreach($product->variant as $var)

{{--                        {{dd($var->type)}}--}}

{{--                        @for ($i = 0 ; $i<count($variant); $i++)--}}


                        {{--                        {{dd($variant)}}--}}
                        <div class="col-md-3">

                            <div class="form-group">

                                <label for="{{$var->type}}">{{$var->type}}</label>

                                @if(count($var->variant_option) != 0)
{{--                                    <select class="form-control" name="option[{{$var->type}}]">--}}
{{--                                        <option value="--select option--" selected disabled>--select--}}
{{--                                            option----}}
{{--                                        </option>--}}
                                        @foreach($var->variant_option as $option)

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="option[{{$option->name}}]" value="{{$option->id}}">
                                            <label>{{$option->name}}</label>
                                        </div>

{{--                                            <option value="{{$option->id}}">{{$option->name}}</option>--}}
                                        @endforeach
{{--                                    </select>--}}
                                @else
{{--                                    <select class="form-control" name="variantoptions_id">--}}
{{--                                        <option value="no options" selected disabled>No Options Yet--}}
{{--                                        </option>--}}
{{--                                    </select>--}}
                                @endif
{{--                                @foreach($variants as $option)--}}

{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" name="role[]" checked>--}}
{{--                                        <label>{{$variant[$i]->name}}</label>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}


                            </div>
                        </div>
{{--                    @endfor--}}
                    @endforeach


                </div>
                <button type="submit" class="btn btn-success mb-3" id="submit_button">Save</button>

            </form>


        </div>
        <div class="tab-pane fade p-5" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

            {{--featured image start--}}
            <div class="row">
                <div class="col-md-11 d-flex class_images">
                    <div class="form-group col-md-5">
                        <label for="image">Featured Image</label>
                        <input type="file" onchange="preview_image(event)" name="featured_image" value="4141">

                        <img id="output_image"
                             src="{{asset('/products/images/featured/'.$product->featured_image_url)}}"
                             style="width: 65%;"/>


                    </div>

                </div>

            </div>


            {{--            feature image end--}}
            {{--            other images start--}}
            <div class="row">
                <div class="col-md-11 d-flex class_images">

                    <div class="form-group">
                        <label for="image">Images</label>
                        <input type="file" class="" onchange="preview_image2(event)" name="image2">
                        <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image6();" multiple/>
                        <img id="output_image2" style="width: 50px;"/>

                    </div>


                </div>

                <div class="col-sm-10">
                    <div id="image_preview" class="d-flex">
                        @foreach($images as $image)
                            <img id="output_image"
                                 src="{{asset('/products/images/others/'.$image->image_url)}}"
                                 style="width: 24%; margin: 10px"/>

                        @endforeach

                    </div>
                </div>
            </div>
            {{--            other images end--}}

        </div>
    </div>

















































@endsection

@section('js')



    <script>

        function preview_image6() {
            var total_file = document.getElementById("upload_file").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append()
                $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "' style='width: 24%; margin: 10px'><br>");
            }
        }
    </script>





    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        function preview_image2(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_image2');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }


        function preview_image3(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_image3');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        function preview_image4(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_image4');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>



    <script>
        const numberInput = document.getElementById('number_items');
        const submitButton = document.getElementById('submit_button');

        numberInput.addEventListener('input', ($event) => {

            if ($event.target.value <= 0) {
                submitButton.setAttribute('disabled');
            } else {
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



