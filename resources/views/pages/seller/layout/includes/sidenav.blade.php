

<div class="sidenav">
    <a href="{{route('seller.dashboard')}}"><h3>S.DASHBOARD</h3></a>

<HR>
   <div>
       <button class="accordion">
             Products</button>
       <div class="panel">
           <ul>
               <li>
                   <a class="nav-link" href="{{route('seller.product.create')}}">Add Products </a>
               </li>
               <li>
                   <a class="nav-link" href="{{route('seller.product.view')}}">View Products </a>
               </li>

           </ul>
       </div>
   </div>
   <div>
       <a href="{{route('seller.brand.view')}}"><button class="accordion"> Brands</button></a>

   </div>
    <div>
        <a href="{{route('seller.region.view')}}"><button class="accordion">Regions</button></a>

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
                    <a class="nav-link" href="{{route('seller.order.view')}}">View Orders</a>
                </li>
                <li>item 1</li>
                <li>item 1</li>
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
                    <a href="{{route('seller.report.view')}}" class="nav-link">View Reports</a>
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
                   <a class="nav-link" href="#">Inventory</a>
               </li>
               <li>
                   <a class="nav-link" href="{{route('seller.variant_option.view')}}">Variants Options</a>
               </li>
               <li>item 1</li>
           </ul>
       </div>
   </div>
</div>



