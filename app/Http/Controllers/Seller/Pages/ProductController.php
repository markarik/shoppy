<?php

namespace App\Http\Controllers\Seller\Pages;

use App\Brand;
use App\Checkout;
use App\Image;
use App\Inventory;
use App\OrderDelivery;
use App\Payment;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.seller.product.view_product')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$brands = Brand::all();
       $brands = Brand::all();

//    dd($brands);

        $data = [
            'brands'=>$brands
        ];

        return view('pages.seller.product.create_product',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());

        /*Validator::make($request->all(),[
            'name'=>'required',
            'price'=>'required',
            'short_description'=>'required',
            'featured_image'=>'required',
            ])->validate();*/

      $this->validate($request,[
          'unit_cost'=>'required',
          'short_description'=>'required',
          'featured_image'=>'required|image|mimes:jpeg,png,jpg,gif|max:1000',
          'name'=>'required',
          'quantity'=>'required'

      ]);



        $featured_images_path = './products/images/featured';
        $other_images_path = './products/images/others';

        if ($request->hasFile('featured_image')){
            $featured_image = $request->file('featured_image');
            $date = sha1(date('YmdHis') . str_random(5));

            $final_name = $date . '.' . $featured_image->getClientOriginalName();

            $featured_image->move($featured_images_path, $final_name);

            $product = new Product();
            $product ->name=$request->input('name');
            $product ->short_description=$request->input('short_description');
            $product ->long_description=$request->input('long_description');
            $product ->unit_cost=$request->input('unit_cost');
            $product ->brand_id=$request->input('brand_id');
            $product ->featured_image_url = $final_name;
            $product ->status = 1;
            $product ->seller_id = 1;
            $product->save();


            if ($request->hasFile('image2')){
                $other_image2 =   $request->file('image2');
                $date = sha1(date('YmdHis') . str_random(5));

                $final_name2 = $date . '.' . $other_image2->getClientOriginalName();
                $other_image2->move($other_images_path, $final_name2);

                $image2 = new Image();
                $image2->image_url = $final_name2;
                $image2->product_id = $product->id;
                $image2->save();

            }
            if ($request->hasFile('image3')){

                $other_image3 =   $request->file('image3');

                $date = sha1(date('YmdHis') . str_random(5));

                $final_name3 = $date . '.' . $other_image3->getClientOriginalName();
                $other_image3->move($other_images_path, $final_name3);

                $image3 = new Image();
                $image3->image_url = $final_name3;
                $image3->product_id = $product->id;
                $image3->save();

            }
            if ($request->hasFile('image4')){

                $other_image4 =   $request->file('image4');
                $date = sha1(date('YmdHis') . str_random(5));

                $final_name4 = $date . '.' . $other_image4->getClientOriginalName();
                $other_image4->move($other_images_path, $final_name4);

                $image4 = new Image();
                $image4->image_url = $final_name4;
                $image4->product_id = $product->id;
                $image4->save();

            }


            $inventory = new Inventory();
            $inventory->products_id = $product->id;
            $inventory -> quantity = $request->input('quantity');
            $inventory->save();

        }

        return redirect()->route('seller.product.view')->with('success','Product Created');


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

        $product = Product::findOrFail($id);

        if (count($product->undelivered_orders) != 0){

            $product->delete();

            return redirect()->back()->with("success","Product Deleted Successfully");

        }else{

            $product->delete();

            return redirect()->back()->with("error","Product With an Active Order Cannot Be Deleted");

        }

    }



}
