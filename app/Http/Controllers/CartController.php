<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use App\OrderVariantOption;
use App\Product;
use App\ProductVariantOptions;
use App\Setting;
use App\VariantOption;
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
        $taxes = Setting::where('name','tax')->first();
//dd($carts);
        $taxvalue = $taxes->value;

        $totalcartcost = $amountsum + $taxvalue;

//        dd($carts[0]->option_name[0]->name);






        $data =[
            'carts'=>$carts,
            'wishlist_count'=>$wishlist_count,
            'cart_count'=>$cart_count,
            'quantitysum'=>$quantitysum,
            'amountsum'=>$amountsum,
            'taxes'=>$taxes,
            'totalcartcost'=>$totalcartcost

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
//        dd($request->all());

        $total_amount = $request->quantity * $request->amount;

        $orderProducts = new OrderProduct();
         $orderProducts ->product_id=$request->product_id;
         $orderProducts->user_id=$request->user_id;
         $orderProducts->checkout_id=$request->checkout_id;
         $orderProducts->quantity=$request->quantity;
         $orderProducts->amount=$total_amount;
         $orderProducts->save();

        $options = $request->input('option');
//        dd($options);



        if ($options != null){
            foreach (array_values($options) as $option) {
//dd($option);

                $latest_product = OrderProduct::where('user_id', Auth::user()->id)->orderby('created_at', 'desc')->get();
                $variant_option = VariantOption::where('id', $option)->get();

                $order_variant_option = new OrderVariantOption();
                $order_variant_option->orderproduct_id = $latest_product->id;
                $order_variant_option->variant_option_id = $variant_option->id;
                $order_variant_option->save();
                dd($order_variant_option);

                return redirect()->back()->with('success', 'Item, ' . $orderProducts->product->name . ' Added to your cart.');
            }
        }else{
            $latest_product = OrderProduct::where('user_id', Auth::user()->id)->orderby('created_at', 'desc')->first();

            $order_variant_option = new OrderVariantOption();
            $order_variant_option->orderproduct_id = $latest_product->id;
            $order_variant_option->variant_option_id = null;
            $order_variant_option->save();

            return redirect()->back()->with('success','Item, '. $orderProducts->product->name.' Added to your cart.');
        }
//        dd($order_variant_option);

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


//        dd($request->all());

        $cart = OrderProduct::findOrFail($id);

//        dd($cart);

        $cart ->quantity=$request->input('quantity');
//        $brand->category_id=$request->input('category');
//        dd($cart);
        $cart->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = OrderProduct::findOrFail($id);

        $item->delete();



        return redirect()->back()->with('success',' Item successfully deleted.');
    }
}
