<?php

namespace App\Http\Controllers\Buyer;

use App\Brand;
use App\Category;
use App\Offer;
use App\OrderProduct;
use App\Product;
use App\WishList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {

        if (Auth::user() != null) {


            $category_name = Category::where('name', $name)->first();
//            $product_category = Category::where('parent_id',$category_name->id)->get();
//            dd($product_category);


//            dd($category_name->product_detail->name);

            $wishlist = WishList::where('user_id', Auth::user()->id)->get();
            $wishlist_count = count($wishlist);
            $carts = OrderProduct::where('user_id', Auth::user()->id)->where('checkout_id', null)->get();
            $cart_count = count($carts);
            $categories = [];
            array_push($categories, Category::where('parent_id', $category_name->id)->get());

//dd($categories[0][0]->id);

//            for ($i = 0; $i < count($categories); $i++) {
//
//                foreach ($categories[$i] as $category) {
//
//
//
//                }
//            }

            $brands_arr = [];

            for ($i = 0; $i < count($categories); $i++) {
                foreach ($categories[$i] as $category) {


                    $brand = Brand::where('category_id', $category->id)
                        ->orWhere('category_id', $category_name->id)
                        ->first();

                    if ($brand != null) {

                        array_push($brands_arr, $brand);

                    } else {

                    }


                }
            }
            $collection = collect($brands_arr);

            $brands = $collection->unique();

            $brands->values()->all();

//            dd($brands);
//            dd($brands[0]->product_detail);


            $products = [];
            $offers = [];

            for ($i = 0; $i < count($brands); $i++) {

                array_push($products, Product::findOrFail($brands[0]->product_detail));


            }

            foreach ($products as $product) {
                for ($i = 0; $i < count($product); $i++) {
                    array_push($offers, Offer::where('product_id', $product[$i]->id)->first());

                }
            }


            $data = [
                'categories' => $categories,
                'category_name' => $category_name,
                'brands' => $brands,
                'cart_count' => $cart_count,
                'wishlist_count' => $wishlist_count,
                'offers' => $offers,


            ];
            return view('assets.Product_category.product_category', $data);


        } else {









            $category_name = Category::where('name', $name)->first();


//            dd($category_name);


//            $product = Category::join('brands','brands.category_id','categories.id')
//                ->join('products','brands.id','products.brand_id')
////                ->where('parent_id', $category_name->id)->get();
//
//            $productcategories = Product::join('brands','brands.id','products.brand_id')
//                                ->join('categories','categories.id','brands.category_id')
//                                ->where('parent_id',$category_name->id)->get();
//
//
////            dd($productcategories[0]);







            $categories = [];
            array_push($categories, Category::where('parent_id', $category_name->id)->get());


            $brands_arr = [];

//            dd($brands_arr);

            for ($i = 0; $i < count($categories); $i++) {
                foreach ($categories[$i] as $category) {


                    $brand = Brand::where('category_id', $category->id)
                        ->orWhere('category_id', $category_name->id)
                        ->first();

                    if ($brand != null) {

                        array_push($brands_arr, $brand);

                    } else {

                    }


                }
            }

//            dd($brands_arr);

            $collection = collect($brands_arr);

            $brands = $collection->unique();

            $brands->values()->all();


            $products = [];
            $offers = [];

            for ($i = 0; $i < count($brands_arr); $i++) {

                array_push($products, Product::findOrFail($brands_arr[0]->product_detail));


            }

            foreach ($products as $product) {
                if ($product != null) {
                    for ($i = 0; $i < count($product); $i++) {
//                        dd($product[$i]);


                    $offer=Offer::where('product_id', $product[$i]->id)->first();

                    if ($offer  != null) {

                        array_push($offers, $offer);
                    }
                    }

                    }else{

                }
            }


//            dd($offers);


//            dd($brands);
//            dd($brands_arr[0]->product_detail);


            $data = [
                'categories' => $categories,
                'category_name' => $category_name,
                'offers' => $offers,
//                'productcategories'=>$productcategories,
                'brands' => $brands,
            ];
            return view('assets.Product_category.product_category', $data);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request->all());
    }


    public function viewCategory($name)
    {

        if (Auth::user() != null) {
            $wishlist = WishList::where('user_id', Auth::user()->id)->get();
            $wishlist_count = count($wishlist);
            $carts = OrderProduct::where('user_id', Auth::user()->id)->where('checkout_id', null)->get();
            $cart_count = count($carts);
            $category_name = Category::where('name', $name)->first();


            $brands = Brand::where('category_id', $category_name->id)
                ->get();
//            dd($brands);

            $data = [
                'category_name' => $category_name,
                'brands' => $brands,
                'cart_count' => $cart_count,
                'wishlist_count' => $wishlist_count,
            ];


            return view('assets.Product_category.selected_category', $data);

        } else {


            $category_name = Category::where('name', $name)->first();


            $brands = Brand::where('category_id', $category_name->id)
                ->get();

            $data = [
                'category_name' => $category_name,
                'brands' => $brands,
            ];


            return view('assets.Product_category.selected_category', $data);
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
