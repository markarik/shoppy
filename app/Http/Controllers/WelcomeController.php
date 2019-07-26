<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function landingpage (){

        $featured = Product::where('status',2)->get();
        $products = Product::all();

        $data = [
            'featured'=>$featured,
            'products'=>$products
        ];


        return view('index',$data);

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
