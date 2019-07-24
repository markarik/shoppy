<?php

namespace App\Http\Controllers\SellerAuth;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.seller.seller_register');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'first_name' => 'required',
           'last_name' => 'required',
           'storename' => 'required','max:255',
           'phonenumber' => 'required','max:255',
           'email' => 'required','max:255',
           'password' => ['required','max:255'],
           'business_no' => ['required','max:255'],
           'county' => ['required','max:255'],
       ]);

        $seller = new seller;

        $seller ->f_name=$request->input('first_name');
        $seller ->l_name=$request->input('last_name');
        $seller ->email =$request->input('email');
        $seller ->  store_name = $request->input('storename');
        $seller ->  business_no = $request->input('business_no');
        $seller ->  phone_number = $request->input('phonenumber');
        $seller ->  county = $request->input('county');

        $seller ->  password = Hash::make($request->input('password'));

        $seller->save();

       return redirect('seller/login');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
