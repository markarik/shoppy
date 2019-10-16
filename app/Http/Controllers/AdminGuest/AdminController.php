<?php

namespace App\Http\Controllers\AdminGuest;

use App\Brand;
use App\Product;
use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
    public function index()
    {
        $stores = Seller::all();
        return view('pages.admin.admin')->with('stores',$stores);
    }

    public function viewBrands()
    {
        $brands = Brand::all();

//        dd($brands[0]->getCategoryNameAttribute());

        return view('pages.admin.admin_view_brands')->with('brands',$brands);
    }

    public function viewSeller()
    {
        $stores = Seller::all();
//        dd($stores);
        return view('pages.admin.activateSellers.view_sellers_request')->with('stores',$stores);
    }

    public function showFeaturedProducts()
    {
        $featured = Product::where('status',2)->get();

        return view('pages.admin.products.admin_view_feature_product')->with('featured',$featured);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
//dd($products);
        return view('pages.admin.products.admin_view_product')->with('products',$products);
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

    public function change_status( $product_id )
    {
        $product = Product::findOrFail($product_id);

        if ($product->status == Product::STATUS_NORMAL){
            $product->status = Product::STATUS_FEATURED;
            $product->save();
        }else{
            $product->status = Product::STATUS_NORMAL;
            $product->save();
        }
        return redirect()->back()->with("success","Product status changed successfully");
    }


    public function SellerChangeStatus($seller_id)
    {
        $seller = Seller::findorFail($seller_id);

        if($seller->status == Seller::STATUS_PENDING){
            $seller->status = Seller::STATUS_ACTIVE;
            $seller->save();
        }else {

            $seller->status = Seller::STATUS_PENDING;
            $seller->save();
        }
        return redirect()->back()->with("success","Seller status changed successfully");

   }

//    public function logout(){
//        Auth::logout();
//
//        return redirect()->route('user.dashboard');
//    }
}
