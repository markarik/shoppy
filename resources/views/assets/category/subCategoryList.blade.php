@foreach($subcategories as $subcategory)
   <div class="dropdown-content dropbtn">
       <ul class="category_hover">
           <li class="class_subcategory">{{$subcategory->name}}</li>
           @if(count($subcategory->subcategory))
               @include('assets.category.subCategoryList',['subcategories' => $subcategory->subcategory])
           @endif
       </ul>
   </div>
@endforeach


