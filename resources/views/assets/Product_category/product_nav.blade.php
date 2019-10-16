{{--<ul class="nav flex-column">--}}
{{--    <li class="nav-item">--}}
{{--        <form action="{{route('user.category.search')}}">--}}

{{--            <div>--}}

{{--                <lable>Price :</lable>--}}

{{--                <input type="search" placeholder="min" name="from" class="category_check_by_price"> ---}}

{{--                <input type="search" placeholder="max" name="to" class="category_check_by_price">--}}


{{--                <input type="submit" value="OK" class="btn">--}}

{{--            </div>--}}

{{--        </form>--}}
{{--    </li>--}}
{{--    <li class="nav-item">--}}
{{--        <form class="d-flex">--}}


{{--                <lable>Sort By:</lable>--}}

{{--               <div class="sort_by_category ml-2">--}}
{{--                   <input type="submit" name="oldest" class="btn class_button_category" value="Oldest">--}}

{{--                   <input type="submit" name="newest" class="btn class_button_category" value="Newest">--}}

{{--               </div>--}}


{{--        </form>--}}
{{--    </li>--}}

{{--</ul>--}}

<nav class="navbar navbar-expand-lg navbar-light bg-light product_category_nav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <form action="{{route('user.category.search')}}" class="d-flex form-inline my-2 my-lg-0">


                    <input class="form-control mr-sm-2" type="search" placeholder="Name/Brand" aria-label="Search" name="search">


                    <lable>Price :</lable>
                    <input type="search" placeholder="min" name="from" class="form-control "> to

                    <input type="search" placeholder="max" name="to" class="form-control category_check_by_price">


                    <input type="submit" value="OK" class="btn">


                </form>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Link</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--            </li>--}}
        </ul>
{{--        <form class="form-inline my-2 my-lg-0">--}}
{{--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--        </form>--}}
    </div>
</nav>