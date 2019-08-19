<?php

namespace App\Http\Controllers\SellerGuest;

use App\OrderDelivery;
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


        $orders = OrderProduct::join('products','products.id','order_products.product_id')
        ->join('sellers','sellers.id','products.seller_id')
        ->where('products.seller_id','=',Auth::user()->id)
        ->where('checkout_id','!=',null)->get();

//dd($orders);
        $data=[

            'orders'=>$orders

        ];
        return view('pages.seller.orders.view_orders',$data);
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


    public function undelivered_order()
    {

//        $orders = OrderProduct::all();
        $orders = OrderProduct::join('products','products.id','order_products.product_id')
            ->join('sellers','sellers.id','products.seller_id')
            ->where('products.seller_id','=',Auth::user()->id)
            ->where('checkout_id','!=',null)->get();
//        dd($orders[0]->seller_delivery_status);
//        dd($orders);

//        foreach ($orders as $order){
////            dd($order->undelivered_orders);
//        }

//        dd($orders[0]->seller_delivery_status);
//        dd($orders[0]->undelivered_orders);
//        dd($orders[0]->buyer_status);
        $data=[

            'orders'=>$orders

        ];

        return view('pages.seller.orders.view_undelivered_orders',$data);
    }

    public function orderchangestatus($order_id)
    {
        $ordersdelivery = OrderDelivery::findorFail($order_id);
        
        if($ordersdelivery->seller_delivery_status == OrderDelivery::STATUS_PENDING){
            $ordersdelivery->seller_delivery_status = OrderDelivery::STATUS_DELIVERED;
            $ordersdelivery->save();
        }else{
            $ordersdelivery->seller_delivery_status = OrderDelivery::STATUS_PENDING;
            $ordersdelivery->save();
        }

        return redirect()->back()->with('success','Order Status Updated');
        
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
