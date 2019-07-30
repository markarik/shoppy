<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use App\Product;
use App\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function landingpage (){

//        dd(Auth::user());

        $featured = Product::where('status',2)->get();
        $products = Product::all();


        if (Auth::user() != null){
            $cart  = OrderProduct::where('user_id',Auth::user()->id)->get();
            $cart_count = count($cart);
            $wishlist = WishList::where('user_id', Auth::user()->id)->get();
            $wishlist_count = count($wishlist);

            $data = [
                'featured'=>$featured,
                'products'=>$products,
                'wishlist_count'=>$wishlist_count,
                'cart_count'=>$cart_count
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


    public function detailspage (){

$products =Product::all();

        return view('assets.details.details')->with('products',$products);

    }




    public function showCart(){
        return view ('assets.cart.cart');
    }
    public function showCheckOut(){


        $user = Auth::user();
            $cart  = OrderProduct::where('user_id',$user->id)->get();
            $cart_count = count($cart);
            $wishlist = WishList::where('user_id',$user->id)->get();
            $wishlist_count = count($wishlist);

            $data = [

                'wishlist_count'=>$wishlist_count,
                'cart_count'=>$cart_count
            ];



        return view ('assets.checkout.checkout',$data);
    }
}
