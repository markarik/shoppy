<?php

namespace App\Http\Controllers;

use App\Category;
use App\Inventory;
use App\OrderProduct;
use App\OrderVariantOption;
use App\Product;
use App\ProductVariantOptions;
use App\Setting;
use App\VariantOption;
use App\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $wishlist_count = count($wishlists);
        $carts = OrderProduct::where('user_id', $user->id)->where('checkout_id', null)->get();
        $boughtproducts = OrderProduct::where('user_id', $user->id)->where('checkout_id', 1)->get();
        $cart_count = count($carts);
        $quantitysum = $carts->sum('quantity');
        $amountsum = $carts->sum('amount');
        $taxes = Setting::where('name', 'tax')->first();
        $taxvalue = $taxes->value;
        $totalcartcost = $amountsum + $taxvalue;
        $categories = Category::where('parent_id',null)->get();

        $data = [
            'carts' => $carts,
            'wishlist_count' => $wishlist_count,
            'cart_count' => $cart_count,
            'quantitysum' => $quantitysum,
            'amountsum' => $amountsum,
            'taxes' => $taxes,
            'totalcartcost' => $totalcartcost,
            'boughtproducts' => $boughtproducts,
            'categories' => $categories,


        ];

        return view('assets.cart.cart', $data);
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


        $validator = Validator::make($request->all(), [
            'quantity' => 'integer|min:1'
        ]);



        $inventory = Inventory:: where('product_id', $request->product_id)->first();

        if($validator ->fails()){

                return redirect()->back()->with('error', 'Quantity cannot be a number Less Than ONE');

        }elseif ($inventory->quantity >= $request->quantity) {

            $total_amount = $request->quantity * $request->amount;

            $orderProducts = new OrderProduct();
            $orderProducts->product_id = $request->product_id;
            $orderProducts->user_id = $request->user_id;
            $orderProducts->checkout_id = $request->checkout_id;
            $orderProducts->quantity = $request->quantity;
            $orderProducts->amount = $total_amount;
            $orderProducts->delivery_status = $request->input('customRadioInline1');
            $orderProducts->save();

            $inventory->quantity -= $request->quantity;
            $inventory->save();

        } else {

            return redirect()->back()->with('error', 'Only ' . $inventory->quantity . 'Items Available');

        }

        $options = $request->input('option');


        if ($options != null) {
            foreach (array_values($options) as $option) {


                $latest_product = OrderProduct::where('user_id', Auth::user()->id)->orderby('created_at', 'desc')->first();
                $variant_option = VariantOption::where('id', $option)->first();
                $order_variant_option = new OrderVariantOption();
                $order_variant_option->orderproduct_id = $latest_product->id;
                $order_variant_option->variant_option_id = $variant_option->id;
                $order_variant_option->save();

            }
            return redirect()->back()->with('success', 'Item, ' . $orderProducts->product->name . ' Added to your cart.');

        } else {
            $latest_product = OrderProduct::where('user_id', Auth::user()->id)->orderby('created_at', 'desc')->first();

            $order_variant_option = new OrderVariantOption();
            $order_variant_option->orderproduct_id = $latest_product->id;
            $order_variant_option->variant_option_id = null;
            $order_variant_option->save();

            return redirect()->back()->with('success', 'Item, ' . $orderProducts->product->name . ' Added to your cart.');
        }

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

        $cart = OrderProduct::findOrFail($id);
        $cart->quantity = $request->input('quantity');
        $cart->save();

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = OrderProduct::findOrFail($id);
        $item->delete();
        $inventory = Inventory:: where('product_id', $item->product_id)->first();
        $inventory->quantity += $item->quantity;
        $inventory->save();
        return redirect()->back()->with('success', ' Item successfully deleted.');
    }
}
