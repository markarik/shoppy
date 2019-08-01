<?php

namespace App\Http\Controllers\AdminGuest;

use App\Variants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VariantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variants = Variants::all();
        return view('pages.admin.variants.view_variants')->with('variants',$variants);
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
        $this->validate($request,[
            'type'=>'required'
        ]);
//                dd($request->all());

        $variants = new Variants();

        $variants->type=$request->input('type');

        $variants->save();

        return redirect()->back()->with('flash_message','Item Added to your Variants.');

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
        $variants = Variants::findOrFail($id);

        $variants->type=$request->input('type');

        $variants->save();
//dd($variants);
        return redirect()->back()->with('flash_message','Item Added to your Variants.');
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
