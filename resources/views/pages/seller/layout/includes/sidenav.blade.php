{{-- Side Navigation --}}
<div class="col-md-2 side_bar">
    <div class="sidebar content-box side_bars" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current currents"><a href="#"><i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
            {{--products--}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}">View Product</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('product.create')}}">Add Product</a></li>
                </ul>
            </li>
            {{--categories--}}
                    <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Categories
                    <span class="caret pull-right"></span>
                </a>
                            <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">Categories</a></li>
                </ul>
            </li>
            {{--sales--}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Categories
                    <span class="caret pull-right"></span>
                </a>
                            <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('category.index')}}">Categories</a></li>
                </ul>
            </li>
            {{--Orders--}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="#">New Orders</a></li>
                </ul>
                <ul>
                    <li><a href="#">delivered Orders</a></li>
                </ul>
                <ul>
                    <li><a href="#">Pedding Orders</a></li>
                </ul>
            </li>
            {{--Reports--}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Reports
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="#">Pdf format</a></li>
                </ul>
                <ul>
                    <li><a href="#">Excell format</a></li>
                </ul>
            </li>
            {{--messages--}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Messages
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="#">Pdf format</a></li>
                </ul>
                <ul>
                    <li><a href="#">Excell format</a></li>
                </ul>
            </li>
            {{--charts--}}
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Charts
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="#">Line graphs</a></li>
                </ul>
                <ul>
                    <li><a href="#">Bar Graphs</a></li>
                </ul>
            </li>


        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->