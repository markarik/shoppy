<?php

namespace App\Http\Controllers\Buyer;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {

        $category_name = Category::where('name',$name)->first();


        $categories = [];

        array_push($categories,Category::where('parent_id',$category_name->id)->get());

        $brands = [];

for ($i=0 ; $i<count($categories);$i++) {
    foreach ($categories[$i] as $category) {


        array_push($brands, Brand::where('category_id', $category->id)->get());
//        dd($brands);
    }
}

//        dd($category);


        $data = [
            'categories'=>$categories,
            'category_name'=>$category_name,
            'brands'=>$brands,
        ];
        return view ('assets.Product_category.product_category',$data);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
