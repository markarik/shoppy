<?php

namespace App\Http\Controllers;

use App\Category;
use App\FeaturedCouresel;
use App\Image;
use App\Inventory;
use App\Offer;
use App\OrderProduct;
use App\Product;
use App\Reviews;
use App\Seller;
use App\Variants;
use App\WishList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function landingpage()
    {
        $featured = Product::join('inventories', 'inventories.product_id', 'products.id')
            ->where('status', 2)->get();


        $products = Product::join('inventories', 'inventories.product_id', 'products.id')
            ->orderByRaw('RAND()')->take(8)->get();


        $date = Carbon::today()->subDays(20);


        $productings = Product::where('created_at', '>=', $date)
            ->orderByRaw('RAND()')->take(6)->get();


        $offers = Offer::all();

        $categories = Category::where('parent_id', NULL)->get();

        $variants = Variants::all();
        $couresels = FeaturedCouresel::all();
        if (Auth::user() != null) {
            $carts = OrderProduct::where('user_id', Auth::user()->id)->where('checkout_id', null)->get();
            $cart_count = count($carts);
            $wishlist = WishList::where('user_id', Auth::user()->id)->get();
            $wishlist_count = count($wishlist);

            $data = [
                'featured' => $featured,
                'products' => $products,
                'productings' => $productings,
//                'productss' => $productss,
                'wishlist_count' => $wishlist_count,
                'cart_count' => $cart_count,
                'variants' => $variants,
                'couresels' => $couresels,
                'offers' => $offers,
                'categories' => $categories,
            ];
        } else {
            $data = [
                'couresels' => $couresels,
                'featured' => $featured,
                'products' => $products,
                'productings' => $productings,
                'offers' => $offers,
                'categories' => $categories,


            ];
        }


        return view('index', $data);

    }


    public function viewallproducts()
    {
        $all_products = Product::all();


        $categories = Category::where('parent_id', NULL)->get();
        $data = [
            'all_products' => $all_products,
            'categories' => $categories,


        ];


        return view('assets.products.all_product_cards', $data);


    }


    public function detailspage($id)
    {

        if (Auth::user() != null) {

            $products = Product::findOrFail($id);
            $seller = Seller::where('id',$products->seller_id)->first();
            $extra_images = Image::where('product_id', $products->id)->get();
            $carts = OrderProduct::where('user_id', Auth::user()->id)->where('checkout_id', null)->get();
            $cart_count = count($carts);
            $wishlist = WishList::where('user_id', Auth::user()->id)->get();
            $wishlist_count = count($wishlist);
            $boughtproducts = OrderProduct::where('user_id', Auth::user()->id)->where('checkout_id', 1)->get();
            $reviews = Reviews::where('product_id', $products->id)->get();
            $offers = Offer::where('product_id', $products->id)->first();
            $categories = Category::where('parent_id', null)->get();

            $user = Auth::user();
            $orderproductsdisabled = OrderProduct::where('product_id', $products->id)
                ->where('user_id', $user->id)
                ->where('checkout_id', null)->first();

            $otherproducts = Product::where('brand_id', $products->brand_id)
                ->where('seller_id', '!= ', $products->seller_id)->get();

            $inventory = Inventory::where('product_id', $products->id)->first();



            $data = [

                'products' => $products,
                'wishlist_count' => $wishlist_count,
                'cart_count' => $cart_count,
                'extra_images' => $extra_images,
                'boughtproducts' => $boughtproducts,
                'reviews' => $reviews,
                'otherproducts' => $otherproducts,
                'offers' => $offers,
                'categories' => $categories,
                'orderproductsdisabled' => $orderproductsdisabled,
                'inventory' => $inventory,
                'seller'=>$seller,


            ];

            return view('assets.details.details', $data);

        } else {


            $products = Product::findOrFail($id);
//            dd($products);
            $seller = Seller::where('id',$products->seller_id)->first();
//dd($seller);
            $inventory = Inventory::where('product_id', $products->id)->first();
            $extra_images = Image::where('product_id', $products->id)->get();
//            $otherproducts = Product::where('brand_id', $products->brand_id)->get();
            $otherproducts = Product::where('brand_id', $products->brand_id)
                ->where('seller_id', '!= ', $products->seller_id)->get();
            $reviews = Reviews::where('product_id', $products->id)->get();
            $offers = Offer::where('product_id', $products->id)->first();
            $categories = Category::where('parent_id', NULL)->get();


//dd($offers);
            $data = [

                'products' => $products,
                'extra_images' => $extra_images,
                'otherproducts' => $otherproducts,
                'reviews' => $reviews,
                'offers' => $offers,
                'categories' => $categories,
                'inventory' => $inventory,
                'seller'=>$seller,



            ];
            return view('assets.details.details', $data);

        }

    }


}
