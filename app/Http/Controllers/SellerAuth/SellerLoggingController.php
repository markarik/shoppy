<?php

namespace App\Http\Controllers\SellerAuth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerLoggingController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:seller');
//    }

    public  function loginform()
    {
        return view('pages.seller.seller-login');
    }


    public function login(Request $request){
//        validation

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);


//        attempting to log in the seller


        if(Auth::guard('seller')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){


//            if they are authenticate

            return redirect()->intended(route('seller.dashboard'));

        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    protected function guard()
    {
        return Auth::guard('seller');
    }
}
