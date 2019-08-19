

<div class="sidenav">
    <a href="{{route('admin.dashboard')}}"><h3>DASHBOARD</h3></a>

<HR>

    <div>
        <button class="accordion">Sellers</button>
        <div class="panel">
            <ul>

                <li>
                    <a class="nav-link" href="{{route('admin.viewSeller')}}">Available Stores</a>
                </li>
            </ul>
        </div>
    </div>
   <div>
       <button class="accordion">
             Products
       </button>
       <div class="panel">
           <ul>
               <li>
                   <a class="nav-link" href="{{route('admin.products')}}">Products Available</a>
               </li>
               <li>
                   <a class="nav-link" href="#">Featured Request</a>
               </li>
               <li>
                   <a class="nav-link" href="{{route('admin.featured.products')}}">Featured Products</a>
               </li>

           </ul>
       </div>
   </div>
   <div>
       <button class="accordion">
              Brands
       </button>
       <div class="panel">
           <ul>
               <li>
                   <a class="nav-link" href="{{route('admin.brand.view')}}">View Brands</a>
               </li>

           </ul>
       </div>
   </div>

    <div>
        <button class="accordion">Categories</button>
        <div class="panel">
            <ul>
                <li>
                    <a class="nav-link" href="{{route('view.category')}}">View Category</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('add.category')}}">Add Category</a>
                </li>

            </ul>
        </div>
    </div>

    <div>
       <button class="accordion">Sales</button>
       <div class="panel">
           <ul>
               <li>item 1</li>
               <li>item 1</li>
               <li>item 1</li>
           </ul>
       </div>
   </div>

    <div>
        <button class="accordion">Orders</button>
        <div class="panel">
            <ul>
                <li>
                    <a class="nav-link" href="{{route('admin.view.orders')}}">View Orders</a>
                </li>
{{--                <li>item 1</li>--}}
{{--                <li>item 1</li>--}}
            </ul>
        </div>
    </div>

    <div>
        <button class="accordion">Messages</button>
        <div class="panel">
            <ul>
                <li>item 1</li>
                <li>item 1</li>
                <li>item 1</li>
            </ul>
        </div>
    </div>

    <div>
        <button class="accordion">Reports</button>
        <div class="panel">
            <ul>
                <li>
                    <a href="#" class="nav-link">View Reports</a>
                </li>

                <li>
                    <a href="#" class="nav-link">Download Reports</a>
                </li>

            </ul>
        </div>
    </div>

    <div>
        <button class="accordion">Payments</button>
        <div class="panel">
            <ul>
                <li>item 1</li>
                <li>item 1</li>
                <li>item 1</li>
            </ul>
        </div>
    </div>

    <div>
       <button class="accordion">Settings</button>
       <div class="panel">
           <ul>
               <li>
                   <a class="nav-link" href="{{url('admin/couresels')}}">Couresels</a>
               </li>
               <li>
                   <a class="nav-link" href="{{route('admin.variants.view')}}">Variants</a>
               </li>
               <li>
                   <a class="nav-link" href="{{route('admin.add.constants')}}">Constants</a>
               </li>
           </ul>
       </div>
   </div>
</div>



