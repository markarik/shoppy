<?php

namespace App\Http\Controllers\SellerGuest;

use App\Http\Requests\SellerOfferRequest;
use App\Offer;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffersController extends Controller
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
        $offers = Offer::all();
//        dd($offers[0]->product->name);

        $data = [

            'offers'=>$offers
        ];

        return view('pages.seller.offers.view_offers',$data);
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


        $validator = Validator::make($request->all(),[
            'offer'=>'required' ,
            'discount'=>'required' ,
            'start_date'=>'required',
            'end_date'=>'required'
            ]);

        if($validator->fails()){


            return redirect()->back()->with('error','Fill all the fields as expected');


        }
        
        else{

            $offers = Offer::where('product_id',$request['product_id'])->first();

                if($offers == null){

                    $offers = new Offer();
                    $offers ->product_id = $request->input('product_id');
                    $offers ->offer = $request->input('offer');
                    $offers ->discount = $request->input('discount');
                    $offers ->start_time = $request->input('start_date');
                    $offers ->end_time = $request->input('end_date');
                    $offers ->save();

                    return redirect()->back()->with('success','Product Offer Created Successfully');



                }else{

                    return redirect()->back()->with('error','Product Offer Already Exists');


                }


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
//        dd($request->all());
        $offers = Offer::findorFail($id);

        $offers ->offer = $request->input('offer');
        $offers ->discount = $request->input('discount');
        $offers ->start_time = $request->input('start_date');
        $offers ->end_time = $request->input('end_date');
        $offers ->save();


        return redirect()->back()->with('success','Offer Successfully Edited');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offers = Offer::findorFail($id);

        $offers ->delete();

        return redirect()->back()->with('success','Offer Successfully Deleted');

    }
}
