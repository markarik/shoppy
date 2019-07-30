<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use App\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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
    public function index()
    {
        $user = Auth::user();
        $wishlists = Wishlist::where('user_id', $user->id)->orderby('id', 'desc')->get();
        $wishlist_count= count($wishlists);
        $carts = OrderProduct::where('user_id',$user->id)->where('checkout_id',null)->get();
        $cart_count = count($carts);
        $quantitysum=$carts->sum('quantity');
        $amountsum=$carts->sum('amount');




        $data =[
            'carts'=>$carts,
            'wishlist_count'=>$wishlist_count,
            'cart_count'=>$cart_count,
            'quantitysum'=>$quantitysum,
            'amountsum'=>$amountsum
        ];

        return view('assets.cart.cart',$data);
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

        $orderProducts = new OrderProduct();
         $orderProducts ->product_id=$request->product_id;
         $orderProducts->user_id=$request->user_id;
         $orderProducts->checkout_id=$request->checkout_id;
         $orderProducts->quantity=1;
         $orderProducts->amount=$request->amount;
         $orderProducts->save();

         return redirect()->back()->with('flash_message','Item, '. $orderProducts->product->name.' Added to your wishlist.');
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
