@foreach($subcategories as $subcategory)
    <ul>
        <li onclick="showId()">{{$subcategory->name}}</li>
        @if(count($subcategory->subcategory))
            @include('assets.category.subCategoryList',['subcategories' => $subcategory->subcategory])
        @endif
    </ul>
@endforeach


<script>
    function showId() {
        alert('hell000');

    }
</script>