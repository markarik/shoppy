<?php

namespace App\Http\Controllers\SellerGuest;

use App\Brand;
use App\Checkout;
use App\Image;
use App\Inventory;
use App\Offer;
use App\OrderDelivery;
use App\Payment;
use App\Product;

;

use App\ProductVariantOption;
use App\ProductVariantOptions;
use App\VariantOption;
use App\Variants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:seller');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('seller_id', Auth::user()->id)->get();
        return view('pages.seller.product.view_product')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brands = Brand::all();
        $variants = Variants::all();
        $data = [
            'brands' => $brands,
            'variants' => $variants
        ];

        return view('pages.seller.product.create_product', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //    dd($request->all());

        $this->validate($request, [
            'unit_cost' => 'required',
            'short_description' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2200',
            'name' => 'required',
            'quantity' => 'required'

        ]);


        $featured_images_path = './products/images/featured';
        $other_images_path = './products/images/others';

        if ($request->hasFile('featured_image')) {
            $featured_image = $request->file('featured_image');
            $date = sha1(date('YmdHis') . str_random(5));

            $final_name = $date . '.' . $featured_image->getClientOriginalName();

            $featured_image->move($featured_images_path, $final_name);


            $product = new Product();
            $product->name = $request->input('name');
            $product->short_description = $request->input('short_description');
            $product->long_description = $request->input('long_description');
            $product->unit_cost = $request->input('unit_cost');
            $product->brand_id = $request->input('brand_id');
            $product->featured_image_url = $final_name;
            $product->status = 1;
            $product->seller_id = Auth::user()->id;

            $product->save();

            $options = $request->input('option');


            foreach ($options as $items) {


                foreach (array_values($items) as $option) {

                    $latest_product = Product::where('seller_id', Auth::user()->id)->orderby('created_at', 'desc')->first();
                    $variant_option = VariantOption::where('id', $option)->first();


                    $product_variant_option = new ProductVariantOptions();
                    $product_variant_option->product_id = $latest_product->id;
                    $product_variant_option->variant_option_id = $variant_option->id;

                    $product_variant_option->save();

                }
            }

            if ($request->hasFile('image2')) {
                $other_image2 = $request->file('image2');
                $date = sha1(date('YmdHis') . str_random(5));

                $final_name2 = $date . '.' . $other_image2->getClientOriginalName();
                $other_image2->move($other_images_path, $final_name2);


                $image2 = new Image();
                $image2->image_url = $final_name2;
                $image2->product_id = $product->id;
                $image2->save();

            }
            if ($request->hasFile('image3')) {

                $other_image3 = $request->file('image3');

                $date = sha1(date('YmdHis') . str_random(5));

                $final_name3 = $date . '.' . $other_image3->getClientOriginalName();
                $other_image3->move($other_images_path, $final_name3);


                $image3 = new Image();
                $image3->image_url = $final_name3;
                $image3->product_id = $product->id;
                $image3->save();

            }
            if ($request->hasFile('image4')) {

                $other_image4 = $request->file('image4');
                $date = sha1(date('YmdHis') . str_random(5));

                $final_name4 = $date . '.' . $other_image4->getClientOriginalName();
                $other_image4->move($other_images_path, $final_name4);


                $image4 = new Image();
                $image4->image_url = $final_name4;
                $image4->product_id = $product->id;
                $image4->save();

            }


            $inventory = new Inventory();
            $inventory->product_id = $product->id;
            $inventory->quantity = $request->input('quantity');
            $inventory->save();


        }


        return redirect()->route('seller.product.view')->with('success', 'Product Created');


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
        $product = Product::where('id', $id)->first();
        $brands = Brand::all();
        $images = Image::where('product_id', $id)->get();


//        $variants_options = [];
//
//        array_push($variants_options,ProductVariantOptions::where('product_id',$product->id)->get());


//        $variants_options = ProductVariantOptions::where('product_id',$id)->get();
//        $variants = Variants::all();
        $inventory = Inventory::where('product_id', $id)->first();

        $data = [
            'product' => $product,
            'brands' => $brands,
//            'variants_options' => $variants_options,
            'inventory' => $inventory,
            'images' => $images,
        ];
//        dd($images);
//        dd($variants_options);
//        dd($variants_options[0]->Variant_option_name->name);
//        dd($variants_options[0]->variant);
//        dd($product->variant[0]->type);
//        dd($brands[0]->id);

        return view('pages.seller.product.edit_product', $data);

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
//        dd($request->all());


        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->short_description = $request->input('short_description');
        $product->long_description = $request->input('long_description');
        $product->unit_cost = $request->input('unit_cost');
        $product->brand_id = $request->input('brand_id');

        $product->save();


        $inventory = Inventory::findOrFail($id);
        $inventory->quantity = $request->input('quantity');
        $inventory->save();


        $options = $request->input('option');


        foreach ($options as $items) {
            $variant_option = VariantOption::where('variant_option_id', $items);

//            dd($variant_option);

        }


        return redirect()->back()->with('success', 'Product Updated');


    }


    public function updatevariantsoption(Request $request, $id)
    {
//        dd($request->all());

        $options = $request->input('option');
        $product = Product::findOrFail($id);
//        dd($product->id);
        $options_val = array_values($options);
//        dd($options_val);

        foreach ($options_val as $item) {

//            dd($item);

            $variant_option = ProductVariantOptions::where('product_id', $product->id)
                ->where('variant_option_id', $item)->first();
//            dd($variant_option);

            $variant_option->delete();

        }

        return redirect()->back()->with('success', 'Product Variant Option Deleted Successfully');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::findOrFail($id);

        $offers = Offer::where('product_id', $product->id)->first();
        if ($offers != null) {
            $offers->delete();

        }


        if (count($product->undelivered_orders) != 0) {
            return redirect()->back()->with("error", "Product With an Active Order Cannot Be Deleted");
        } else {

            if (count($images = Image::where('product_id', $product->id)->get()) <= 0) {
                foreach ($images as $image) {
                    $product_other_image_paths = ("/products/images/others/{$image->image_url}");
                    unlink(public_path($product_other_image_paths));
                    $image->delete();
                }
                $product_image_path = ("/products/images/featured/{$product->featured_image_url}");
                unlink(public_path($product_image_path));
                Storage::delete($product_image_path);
                $product->delete();
                return redirect()->back()->with("success", "Product Deleted Successfully");
            } else {
                $product_image_path = ("/products/images/featured/{$product->featured_image_url}");
                unlink(public_path($product_image_path));
                Storage::delete($product_image_path);
                $product->delete();
                return redirect()->back()->with("success", "Product Deleted Successfully");
            }
        }

    }
}
