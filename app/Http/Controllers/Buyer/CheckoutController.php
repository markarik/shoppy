<?php

namespace App\Http\Controllers\Buyer;

use App\OrderProduct;
use App\WishList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $user = Auth::user();
        $cart  = OrderProduct::where('user_id',$user->id)->get();
        $cart_count = count($cart);
        $wishlist = WishList::where('user_id',$user->id)->get();
        $wishlist_count = count($wishlist);
         $checkouts = $request->session()->get('checkout');

        $data = [

            'wishlist_count'=>$wishlist_count,
            'cart_count'=>$cart_count,
            'checkouts'=>$checkouts
        ];



        return view ('assets.checkout.checkout',$data);
    }

    /**
     * Show the form for creating a details adress
     *
     * @return \Illuminate\Http\Response
     */
    /*public function createStep1(Request $request)
    {
        $checkouts = $request->session()->get('checkout');
        return view('products.create-step1',compact('product', $checkouts));
    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
    }


    public function storeaddres(Request $request)
    {
        dd($request->all());
        print_r($request->input());
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
