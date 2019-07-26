
<nav class="navbar navbar-expand-sm navbar-dark navbar_modify pl-5 sticky-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="">
        <img src="{{asset('images/shoppy.png')}}" alt="logo" width="90" height="40">
    </a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto pl-4">
        <li class="nav-item dropdown ">
            <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{--                {{ Auth::admin()->name }}--}}
{{--                Mark--}}
                {{\Illuminate\Support\Facades\Auth::user()->f_name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                {{--                <a class="dropdown-item" href="#">Action</a>--}}
                <a class="dropdown-item" href="{{ url('admin/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                    {!! csrf_field() !!}
                </form>
                <a class="dropdown-item" href="#">Another action</a>

            </div>
        </li>
    </ul>
</nav>
