<?php

namespace App\Http\Controllers;

use App\FeaturedCouresel;
use App\Image;
use App\OrderProduct;
use App\Product;
use App\Reviews;
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
        $couresels = FeaturedCouresel::all();

//        dd($couresels);


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
                'variants'=>$variants,
                'couresels'=>$couresels,
            ];
        }

        else{
            $data = [
                'couresels'=>$couresels,
                'featured'=>$featured,
                'products'=>$products,
            ];
        }



        return view('index',$data);

    }


    public function detailspage ($id){

        if(Auth::user() !=null){

            $products =Product::findOrFail($id);
            $extra_images = Image::where('product_id',$products->id)->get();
            $carts = OrderProduct::where('user_id',Auth::user()->id)->where('checkout_id',null)->get();
            $cart_count = count($carts);
            $wishlist = WishList::where('user_id', Auth::user()->id)->get();
            $wishlist_count = count($wishlist);
            $boughtproducts = OrderProduct::where('user_id',Auth::user()->id)->where('checkout_id',1)->get();
            $reviews = Reviews::where('product_id',$products->id)->get();
//            dd($reviews);
            $otherproducts = Product::where('brand_id',$products->brand_id)->get();
//            dd($otherproducts[0]->seller);



            $data = [

                'products'=>$products,
                'wishlist_count'=>$wishlist_count,
                'cart_count'=>$cart_count,
                'extra_images'=>$extra_images,
                'boughtproducts'=>$boughtproducts,
                'reviews'=>$reviews,
                'otherproducts'=>$otherproducts

            ];

            return view('assets.details.details',$data);

        }else{


            $products =Product::findOrFail($id);
            $extra_images = Image::where('product_id',$products->id)->get();
            $otherproducts = Product::where('brand_id',$products->brand_id)->get();
            $reviews = Reviews::where('product_id',$products->id)->get();


            $data = [

                'products'=>$products,
                'extra_images'=>$extra_images,
                'otherproducts'=>$otherproducts,
                'reviews'=>$reviews


            ];
            return view('assets.details.details',$data);

        }

    }






}
