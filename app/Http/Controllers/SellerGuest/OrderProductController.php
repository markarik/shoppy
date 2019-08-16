<?php

namespace App\Http\Controllers\SellerGuest;

use App\OrderProduct;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $count = 0;
//        $orders = OrderProduct::get()->filter(function ($order) use (&$count) {
//           if ($order->product == null) {
//               return false;
//           }
//           $count +=1;
//           return true;
//        });

//        dd($orders[0]->user);


        $orders = OrderProduct::join('products','products.id','order_products.product_id')
        ->join('sellers','sellers.id','products.seller_id')
        ->where('products.seller_id','=',Auth::user()->id)
        ->where('checkout_id','!=',null)->get();
//        dd($orders);
        return view('pages.seller.orders.view_orders')->with('orders',$orders);
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
        //
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
