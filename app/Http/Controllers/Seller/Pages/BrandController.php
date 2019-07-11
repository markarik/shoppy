<?php

namespace App\Http\Controllers\Seller\Pages;
use App\Brand;
use App\Category;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    {

       $categories = Category::pluck('name', 'id');
        $brands = Brand::all();

        $data = [
            'categories'=>$categories,
            'brands'=>$brands
        ];

        return view('pages.seller.brand.view_brands',$data);
    }
//    public function ()
/*
    {
        $brands = Brand::all();
        return view('pages.seller.brand.view_brands')->with('brands',$brands);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



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

        $this->validate($request,[
           'name'=>'required'
        ]);

//        dd($request->all());

        $brand = new Brand();
        $brand ->name=$request->input('name');
        $brand->category_id=$request->input('category');
        $brand->save();


        return redirect()->route('seller.brand.view')->with('success','Brand Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand=Brand::findOrFail($id);

        return view('pages.seller.brand.edit_brands')->with('brand',$brand);
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

        $this->validate($request,[
            'name'=>'required'
        ]);

//        dd($request->all());

        $brand = Brand::findOrFail($id);

//        dd($brand);

        $brand ->name=$request->input('name');
        $brand->category_id=$request->input('category');
        $brand->save();


        return redirect()->route('seller.brand.view')->with('success','Brand Created');
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
}
