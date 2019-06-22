<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sellera');
    }

    public  function loginform()
    {
        return view('auth.sellera-login');
    }


    public function login(Request $request){
//        validation

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);


//        attempting to log in the sellera


        if(Auth::guard('sellera')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){


//            if they are authenticate

            return redirect()->intended(route('sellera.dashboard'));

        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
