<?php

namespace App\Http\Controllers\SellerGuest;

use App\Checkout;
use App\OrderDelivery;
use App\OrderProduct;
use App\Payment;
use App\Product;
use App\User;
use PDF;
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
//$orders = OrderProduct::all();

        $orders = OrderProduct::join('products', 'products.id', 'order_products.product_id')
            ->join('sellers', 'sellers.id', 'products.seller_id')
            ->where('products.seller_id', '=', Auth::user()->id)
            ->where('checkout_id', '!=', null)->get();
//        dd($orders);

        $data = [

            'orders' => $orders

        ];
        return view('pages.seller.orders.view_orders', $data);
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

        $orders = OrderProduct::join('products', 'products.id', 'order_products.product_id')
            ->join('sellers', 'sellers.id', 'products.seller_id')
            ->where('products.seller_id', '=', Auth::user()->id)
            ->where('checkout_id', '!=', null)->get();
//        dd($orders);

        $data = [

            'orders' => $orders

        ];

        return view('pages.seller.orders.view_undelivered_orders', $data);
    }

    public function orderchangestatus($order_id)
    {
        $ordersdelivery = OrderDelivery::findorFail($order_id);

        if ($ordersdelivery->seller_delivery_status == OrderDelivery::STATUS_PENDING) {
            $ordersdelivery->seller_delivery_status = OrderDelivery::STATUS_DELIVERED;
            $ordersdelivery->save();
        } else {
            $ordersdelivery->seller_delivery_status = OrderDelivery::STATUS_PENDING;
            $ordersdelivery->save();
        }

        return redirect()->back()->with('success', 'Order Status Updated');

    }


    public function tablepdfexport(Request $request)
    {

        if ($request['buyer_name']) {
            $user = User::where('f_name', $request['buyer_name'])->first();
            $orders = OrderProduct::join('products', 'products.id', 'order_products.product_id')
                ->join('sellers', 'sellers.id', 'products.seller_id')
                ->where('products.seller_id', '=', Auth::user()->id)
                ->where('user_id', $user->id)
                ->where('checkout_id', '!=', null)->get();

//               dd($orders[0]->checkout_id);

            $checkouts = Checkout::where('id', $orders[0]->checkout_id)->first();

//               dd($checkouts);

            $pending_orders = [];

            foreach ($orders as $order) {
                if ($order->order_delivery_status == "pending") {
                    array_push($pending_orders, $order);
                }
            }
            $data = [

                'pending_orders' => $pending_orders,
                'user' => $user,
                'checkouts' => $checkouts

            ];
            $pdf = PDF::loadview('pages.seller.orders.order_pdf', $data);
            return $pdf->download('UndeliveredOrders.pdf');
        } else {
            return redirect()->back()->with('error', 'Please select Buyers Name');
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
