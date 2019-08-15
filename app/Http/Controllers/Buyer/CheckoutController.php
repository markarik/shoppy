<?php

namespace App\Http\Controllers\Buyer;

use App\Checkout;
use App\OrderProduct;
use App\Region;
use App\Seller;
use App\User;
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
        $regions = Region::all();
        $userinfos= User::where('id',$user->id)->get();
        $cart = OrderProduct::where('user_id',Auth::user()->id)->where('checkout_id',null)->get();
        $cart_count = count($cart);
        $wishlist = WishList::where('user_id',$user->id)->get();
        $wishlist_count = count($wishlist);
         $checkouts = $request->session()->get('checkout');
//dd($userinfos);
        $data = [

            'wishlist_count'=>$wishlist_count,
            'cart_count'=>$cart_count,
            'checkouts'=>$checkouts,
            'regions'=>$regions,
            'userinfos'=>$userinfos
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
        $this->validate($request,[
            'phonenumber'=>'required',
            'region'=>'required',
            'city'=>'required'
        ]);
        $test = sprintf('%06d', rand(1, 10000000));
        $checkout = new Checkout();
        $checkout ->user_id=Auth::user()->id;
        $checkout->phone_number=$request->input('phonenumber');
        $checkout->reference_code=$test;
        $checkout->region_id=$request->input('region');
        $checkout->city=$request->input('city');
        $checkout->status=1;
//        dd($checkout);
        $checkout->save();


        $latest_checkout = Checkout::where('user_id', Auth::user()->id)->orderby('created_at', 'desc')->first();
//        dd(l);

return redirect()->back()->with('success','checkout complete,,Go to payments');
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
