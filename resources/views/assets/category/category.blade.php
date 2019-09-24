<div class="nav-item dropdowns">
    <i class="fas fa-bars ml-5 mt-1 dropbtn"></i>

    <div class="dropdown-content">
        <div class="category_hover">
            <h6>Category</h6>

        </div>
        @foreach($categories as $category)

            <ul>
                <li onclick="showId()">{{$category->name}}</li>
                @if(count($category->subcategory))
                    @include('assets.category.subCategoryList',['subcategories' => $category->subcategory])
                @endif
            </ul>

        @endforeach


    </div>


</div>

{{--<script>--}}
{{--    function showId() {--}}
{{--        alert('hell000');--}}

{{--    }--}}
{{--</script>--}}