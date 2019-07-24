<?php

namespace App\Http\Controllers\SellerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Password;


class SellerForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:seller');
    }

//    guard

    protected function guard()
    {
        return Auth::guard('seller');
    }

    public function broker()
    {
        return Password::broker('sellers');
    }

    public function showLinkRequestForm()
    {
        return view('pages.seller.seller_passwords.seller_email');
    }
}
