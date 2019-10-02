{{--<div class="nav-item dropdowns">--}}
{{--    <i class="fas fa-bars ml-5 mt-1 dropbtn"></i>--}}

{{--    <div class="dropdown-content">--}}
{{--        <div class="category_hover">--}}
{{--            <h6>Category</h6>--}}

{{--        </div>--}}
{{--        @foreach($categories as $category)--}}

{{--            <ul>--}}
{{--                <li >{{$category->name}}</li>--}}
{{--                @if(count($category->subcategory))--}}
{{--                    @include('assets.category.subCategoryList',['subcategories' => $category->subcategory])--}}
{{--                @endif--}}
{{--            </ul>--}}

{{--        @endforeach--}}


{{--    </div>--}}


{{--</div>--}}







{{--            <h1>Category</h1>--}}
<div class="category_heading">
    <h4>Categories</h4>

</div>
<div class="categories_section">

        @foreach($categories as $category)


{{--            <ul>--}}
{{--                <li class="class_category">{{$category->name}}</li>--}}
{{--                @if(count($category->subcategory))--}}
{{--                    @include('assets.category.subCategoryList',['subcategories' => $category->subcategory])--}}
{{--                @endif--}}
{{--                <hr>--}}
{{--            </ul>--}}


                <a href="">
                    <button class="button_accordion" value=""> {{$category->name}}</button>
                </a>


        @endforeach
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}
{{--            <a href="">--}}
{{--                <button class="button_accordion" value="">Clothes</button>--}}
{{--            </a>--}}







</div>







{{--<script>--}}
{{--    function showId() {--}}
{{--        alert('hell000');--}}

{{--    }--}}
{{--</script>--}}