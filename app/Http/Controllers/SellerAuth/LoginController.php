<?php

namespace App\Http\Controllers\SellerAuth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    /**
     * add use AuthenticateUsers class to help in most auth functionalities
     * logout method already implemented inside AuthenticateUsers class. No need to override it
     * define the guard of the user you want to authenticate/logout
     * override the showLoginForm method to define our custom login form
     * define your redirectTo path ,where you want the user taken after login
     *
     */

    use AuthenticatesUsers;

    protected $redirectTo = '/seller/home';

    public function showLoginForm()
    {
        return view('pages.seller.seller-login');
    }

    protected function guard()
    {
        return Auth::guard('seller');
    }

    protected function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 'active',
        ];
    }


//    public function logout(){
//        Auth::logout();
//
//        return redirect()->route('user.dashboard');
//    }


}
