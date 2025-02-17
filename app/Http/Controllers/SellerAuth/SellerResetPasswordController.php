<?php

namespace App\Http\Controllers\SellerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
//use Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SellerResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/seller/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:seller');
    }

    protected  function  broker()
    {
        return Password::broker('sellers');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('pages.seller.seller_passwords.seller_reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

}
