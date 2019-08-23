<?php

namespace App\Http\Controllers\AdminGuest;

use App\OrderProduct;
use App\Product;
use App\Seller;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        $orders = OrderProduct::join('products','products.id','order_products.product_id')
//            ->join('sellers','sellers.id','products.seller_id')
//            ->where('products.seller_id','=',Auth::user()->id)
//            ->where('checkout_id','!=',null)->get();
//
////dd($orders);
//        $data=[
//
//            'orders'=>$orders
//
//        ];
//        return view('pages.admin.adminOrders.view_orders',$data);
//    }


    public function adminindex()
    {
        $storenames  = Seller::all();
        $orders = OrderProduct::where('checkout_id', '!=', null)->get();

//        dd($orders[0]->product->seller);
        $data = [

            'orders' => $orders,
            'storenames'=>$storenames

        ];
        return view('pages.admin.adminOrders.view_orders', $data);
    }

    public function tablepdfexport(Request $request)
    {
        if ($request['from'] != null && $request['to'] != null) {
            $from = Carbon::parse($request->from);
            $to = Carbon::parse($request->to);
            $orders = OrderProduct::select("order_products.*")
                ->whereBetween('created_at', [$from, $to])
                ->where('checkout_id', '!=', null)
                ->get();
            $data = [
                'orders' => $orders,
            ];
            $pdf = PDF::loadview('pages.admin.adminOrders.pdf', $data);
            return $pdf->download('orders.pdf');




        } else if ($request['storename'] != null) {
            $seller = Seller::where('store_name', $request['storename'])->first();
            $products = Product::where('seller_id', $seller->id)->get();

            $my_orders = [];
            foreach ($products as $product) {
                array_push($my_orders, OrderProduct::select("order_products.*")
                    ->where('checkout_id', '!=', null)
                    ->where('product_id', $product->id)
                    ->get());
            }
            $orders = [];
            foreach ($my_orders as $order) {
                for ($i = 0; $i < count($order); $i++) {
                    array_push($orders, $order[$i]);
                }
            }
            $data = [
                'orders' => $orders,
            ];
            $pdf = PDF::loadview('pages.admin.adminOrders.pdf', $data);
            return $pdf->download('orders.pdf');



        } else if ($request['from'] != null && $request['to'] != null && $request['storename'] != null) {

            $from = Carbon::parse($request->from);
            $to = Carbon::parse($request->to);

            $seller = Seller::where('store_name', $request['storename'])->first();
            $products = Product::where('seller_id', $seller->id)->get();

            $my_orders = [];
            foreach ($products as $product) {
                array_push($my_orders, OrderProduct::select("order_products.*")
                    ->where('checkout_id', '!=', null)
                    ->where('product_id', $product->id)
                    ->whereBetween('created_at', [$from, $to])
                    ->get());
            }
            $orders = [];
            foreach ($my_orders as $order) {
                for ($i = 0; $i < count($order); $i++) {
                    array_push($orders, $order[$i]);
                }
            }


            $data = [
                'orders' => $orders,
            ];
            $pdf = PDF::loadview('pages.admin.adminOrders.pdf', $data);
            return $pdf->download('orders.pdf');

        }

        else {
            $orders = OrderProduct::select("order_products.*")
                ->where('checkout_id', '!=', null)
                ->get();
            $data = [
                'orders' => $orders,
            ];
            $pdf = PDF::loadview('pages.admin.adminOrders.pdf', $data);
            return $pdf->download('orders.pdf');
        }
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
    public function destroy()
    {
        //
    }

    public function pdfexport($seller_id)
    {


//        dd($seller_id);
        $orders = OrderProduct::where('seller_id', '==', $seller_id)
            ->where('checkout_id', '!=', null)
            ->get();

        dd($orders);

        $data = [
            'orders' => $orders,
        ];
//        dd($orders);
        $pdf = PDF::loadview('pages.admin.adminOrders.pdf', $data);
        return $pdf->download('orders.pdf');


    }
}
