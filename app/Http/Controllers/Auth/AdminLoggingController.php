<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoggingController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth:admin');
    }




    public function loginform(){
        return view('auth.admin-login');
    }


    public function login(Request $request){
        //validation of  the user details
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //attempts to logging the user

        /*$credentials = $request->only('email','password');
        $remember = $request->has('remember_me') ? true : false;*/

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){


        //if they are authenticated
            return redirect()->intended(route('admin.dashboard'));

        }

        // if not authenticated

        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
