
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-9 col-sm-5 offset-md-2 mt-5">--}}

                <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data" files="true">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="exampleInputCategoryName">Category Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputCategoryName" aria-describedby="nameHelp" placeholder="Enter Category">
                        <small id="emailHelp" class="form-text text-muted">Create a Category That Does Not Exist </small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputchildCategory">Parent Category</label>
                        <small id="emailHelp" class="form-text text-muted">Select aParent Category If Only it's a Child Category </small>

                        <select class="form-control" name="parent_id">
                            <option disabled="true" selected="true" value="0">Child Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category ->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn_buy_now">Submit</button>
                </form>
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




