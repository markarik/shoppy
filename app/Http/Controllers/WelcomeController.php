<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function landingpage (){


        $products = Product::all();

//        dd([$products]);
        return view('index')->with('products',$products);

    }


    public function detailspage (){

        return view('assets.details.details');

    }




    public function showCart(){
        return view ('assets.cart.cart');
    }
    public function showCheckOut(){
        return view ('assets.checkout.checkout');
    }
}
