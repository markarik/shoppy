<?php

namespace App\Http\Controllers\SellerGuest;

use App\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegionController extends Controller
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
        $regions = Region::where('seller_id',Auth::user()->id)->get();
//dd($regions);
        $data = [
            'regions'=>$regions
        ];
        return view('pages.seller.region.view_regions',$data);
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
            'region_name'=>'required',
            'region_cost'=>'required'
        ]);



        $regions = new Region();

        $regions ->seller_id =Auth::user()->id;
        $regions->region_name=$request->input('region_name');
        $regions->region_cost=$request->input('region_cost');

        $regions->save();

        if ($regions->save() == true){
            return redirect()->back()->with('success','Region Added succcessfully');
        }else{
            return redirect()->back()->with('error','Region Not Added ');
        }


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

        $regions = Region::findOrFail($id);

        $regions->region_name=$request->input('region_name');
        $regions->region_cost=$request->input('region_cost');

        $regions->save();

        if ($regions->save() == true){
            return redirect()->back()->with('success','Region Edited succcessfully');
        }else{
            return redirect()->back()->with('error','Region Not Edited ');
        }
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
