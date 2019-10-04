@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-3" style="background-color: red">
            {{$category_name->name}}
        </div>
        <div class="col-sm-7" style="background-color: grey">
            <form action="{{route('user.category.search')}}">

                <div>

                    <lable>Price :</lable>

                    <input type="search" placeholder="min" name="from" class="category_check_by_price"> -

                    <input type="search" placeholder="max" name="to" class="category_check_by_price">


                    <input type="submit" value="OK" class="btn">

                </div>

            </form>
            <form>
                <div>

                    <lable>Sort By:</lable>

                    <input type="button" name="oldest" class="btn" value="Oldest">

                    <input type="button" name="newest" class="btn" value="Newest">


                    <input type="submit" value="OK" class="btn">

                </div>
            </form>

            {{--                <ul class="nav">--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link active" href="#">Active</a>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link" href="#">--}}
            {{--                            <div class="form-group row">--}}
            {{--                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>--}}
            {{--                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">--}}
            {{--                            </div>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link" href="#">Link</a>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link disabled" href="#">Disabled</a>--}}
            {{--                    </li>--}}
            {{--                </ul>           --}}
        </div>
        <div class="col-sm-2" style="background-color: green">
            One of three columns
        </div>
    </div>
@endsection