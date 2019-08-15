<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use App\Product;
use App\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
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
        $wishlists = Wishlist::join('products','products.id','wish_lists.product_id')
            ->select('wish_lists.*','products.featured_image_url as url','products.unit_cost as cost')
        ->where('wish_lists.user_id','=', $user->id)->orderby('id', 'desc')->get();
//        dd($wishlists);
        $wishlist_count= count($wishlists);

        $cart  = OrderProduct::where('user_id',$user->id)->get();

        $cart_count = count($cart);
        $data =[
            'wishlists'=>$wishlists,
            'wishlist_count'=>$wishlist_count,
            'cart_count'=>$cart_count
        ];
        return view('assets.wishlist.wish_cards',$data);
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

        $this->validate($request,[
            'user_id'=>'required',
            'product_id' =>'required',
        ]);

//        dd($request->all());

        $wishlist = new WishList();
        $wishlist->user_id = $request->user_id;
        $wishlist->product_id = $request->product_id;
        $wishlist->save();



        return redirect()->back()->with('success','Item, '. $wishlist->product->name.' Added to your wishlist.');

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
        $item = WishList::findOrFail($id);

        $item->delete();



        return redirect()->back()->with('success',' Item successfully deleted.');
    }
}
