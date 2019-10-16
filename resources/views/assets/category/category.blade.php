<div class="card card_category" >
    <div class="card-body card_body_custom">
        <h5 class="card-title category_heading">Categories</h5>
        @foreach($categories as $category)
            <a href="{{route('user.category.find',[$category->name])}}">
                <button class="button_category" value=""> {{$category->name}}</button>
            </a>
        @endforeach


    </div>
</div>





