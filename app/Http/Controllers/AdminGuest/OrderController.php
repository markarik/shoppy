<?php

namespace App\Http\Controllers\AdminGuest;

use App\OrderProduct;
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
        $orders = OrderProduct::where('checkout_id', '!=', null)->get();

//        dd($orders[0]->product->seller);
        $data = [

            'orders' => $orders

        ];
        return view('pages.admin.adminOrders.view_orders', $data);
    }

    public function tablepdfexport(Request $request)
    {
//        dd($request->all());
        $from = Carbon::parse($request->from);
        $to = Carbon::parse($request->to);

        $orders = OrderProduct::select("order_products.*")
            ->whereBetween('created_at', [$from, $to])
            ->where('checkout_id', '!=', null)
            ->get();
//dd($orders);
        $data = [
            'orders' => $orders,
        ];
        $pdf = PDF::loadview('pages.admin.adminOrders.pdf', $data);

        return $pdf->download('orders.pdf');
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
