<?php

namespace App\Http\Controllers\SellerGuest;

use App\VariantOption;
use App\Variants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VariantsOptionsController extends Controller
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
        $variants = Variants::all();
        $variantsoptions = VariantOption::all();
        $data =[
            'variants'=>$variants,
            'variantsoptions'=>$variantsoptions
        ];
        return view('pages.seller.variantsoptions.view_variants_options',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

//  dd($request->all());

        $variantoptions = new VariantOption();
        $variantoptions ->name=$request->input('name');
        $variantoptions->variant_id=$request->input('variant_id');
        $variantoptions->save();
        return redirect()->back()->with('flash_message','Item Added to your Variants options.');
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
//        dd($request->all());

        $variantoptions = VariantOption::findOrFail($id);
        $variantoptions ->name=$request->input('name');
        $variantoptions->variant_id=$request->input('variant_id');
        $variantoptions->save();
        return redirect()->back()->with('flash_message','Item Added to your Variants options.');
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
