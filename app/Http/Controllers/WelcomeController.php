<?php

namespace App\Http\Controllers;

use App\Image;
use App\OrderProduct;
use App\Product;
use App\Variants;
use App\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function landingpage (){

//        dd(Auth::user());

        $featured = Product::where('status',2)->get();
        $products = Product::orderByRaw('RAND()')->take(8)->get();
        $variants = Variants::all();

//dd($products);
        if (Auth::user() != null){


            $carts = OrderProduct::where('user_id',Auth::user()->id)->where('checkout_id',null)->get();
            $cart_count = count($carts);
            $wishlist = WishList::where('user_id', Auth::user()->id)->get();
            $wishlist_count = count($wishlist);

            $data = [
                'featured'=>$featured,
                'products'=>$products,
                'wishlist_count'=>$wishlist_count,
                'cart_count'=>$cart_count,
                'variants'=>$variants
            ];
        }

        else{
            $data = [
                'featured'=>$featured,
                'products'=>$products,
            ];
        }



        return view('index',$data);

    }


    public function detailspage ($id){

        if(Auth::user() !=null){

            $products =Product::findOrFail($id);
//            dd($products->brand_name);
            $extraimages = Image::where('product_id',$products->id)->get();
//            dd($extraimages);
            $carts = OrderProduct::where('user_id',Auth::user()->id)->where('checkout_id',null)->get();

            $cart_count = count($carts);
            $wishlist = WishList::where('user_id', Auth::user()->id)->get();
            $wishlist_count = count($wishlist);


            $data = [

                'products'=>$products,
                'wishlist_count'=>$wishlist_count,
                'cart_count'=>$cart_count,
                'extraimages'=>$extraimages

            ];

            return view('assets.details.details',$data);

        }else{


            $products =Product::findOrFail($id);


            $data = [

                'products'=>$products,


            ];
            return view('assets.details.details',$data);

        }



    }







}
