<?php

namespace App\Http\Controllers\SellerAuth;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerLoggingController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo='/seller';

    public function showLoginForm()
    {
        return view('pages.seller.seller-login');
    }

    protected function guard()
    {
        return Auth::guard('seller');
    }
}
