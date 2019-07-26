<header class="sticky-top">
    <nav class="nav">
        <div class="navbar-nav">
            <div class="nav-item active category_bar">
                <i class="fas fa-bars ml-5 mt-2" id="dropdown"></i>  CATEGORIES
            </div>
            <div class="side-nav_dropdown">
                <a class="disabled disabled_dopdown">Categories</a>
                <div class="disable_hover">
                    <a href="#" >Link 2</a>
                    <a href="#">Link 3</a>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>

                </div>
            </div>
        </div>
        <form class="form-inline my-2 form_border search">

            <input class="form-control mr-sm-2 " type="search" placeholder="Search For Products" aria-label="Search">

            <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <ul class="ml-auto">
            <li class="nav-item"><a href="{{route('seller.login')}}">ew Store</a></li>
            <li class="nav-item"><a href="">
                    <i class="fas fa-heart fa-2x"></i>
                </a>
            </li>
            <div class="wishlist_sup_heart">1</div>
            <li class="nav-item"><a href="">
                    <i class="fas fa-cart-plus fa-2x"></i>
                </a>
            </li>
            <div class="wishlist_sup">1</div>
            <li class="nav-item"><a href="">
                    <div class="navbar-navs">
                        <div class="nav-item active category_bars">
                            <a href="{{route('login')}}" ><i class="far fa-user fa-2x"></i>{{}}</a>

                        </div>
                       {{-- <div class="side-nav_dropdowns">

                            <div class="disable_hovers">
                                <ul class="d-block">
                                    <li>
                                        <div>
                                            <a href="{{route('login')}}" class="btn btn-success btn_login">Login</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <p>
                                              CLick here
                                            </p>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>--}}
                    </div>

                </a></li>
        </ul>
    </nav>
</header>