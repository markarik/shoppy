
<nav class="navbar navbar-expand-sm navbar-dark navbar_modify pl-5 sticky-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="{{route('seller.dashboard')}}">
        <img src="{{asset('images/shoppy.png')}}" alt="logo" width="90" height="40">
    </a>

    <!-- Links -->
    <ul class="navbar-nav ml-auto pl-4">
       {{-- <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>--}}
        <li class="nav-item dropdown ">
            <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
{{--                {{ Auth::seller()->name }}--}}
                {{\Illuminate\Support\Facades\Auth::user()->f_name}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
{{--                <a class="dropdown-item" href="#">Action</a>--}}
                <a class="dropdown-item" href="{{ url('new/seller/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ url('new/seller/logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="dropdown-item" href="{{route('seller.profile.get')}}">Settings</a>
{{--                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Settings</a>--}}


            </div>
        </li>
    </ul>
</nav>


{{--@foreach($brands as $brand)--}}
{{--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">--}}
{{--                        --}}
{{--                    </h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    --}}{{--Includes--}}
{{--                    @include('pages.seller.brand.edit_brands')--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endforeach--}}
