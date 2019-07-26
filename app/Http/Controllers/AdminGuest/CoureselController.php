<?php

namespace App\Http\Controllers\AdminGuest;

use App\FeaturedCouresel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoureselController extends Controller
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
        $couresels = FeaturedCouresel::all();
        return view('pages.admin.couresel.view_couresels')->with('couresels',$couresels);
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
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:1000'
        ]);
//        dd($request);

        $couresel_image_path = './products/images/couresels';

        if($request ->hasFile('image')){
            $couresel_image = $request->file('image');

            $date = sha1(date('YmdHis').str_random(5));

            $final_couresel = $date. '.' .$couresel_image->getClientOriginalName();

            $couresel_image->move($couresel_image_path,$final_couresel);

            $couresel = new FeaturedCouresel();

            $couresel->description = $request->input('description');
            $couresel->image = $final_couresel;

            $couresel->save();
//            dd($couresel);
        }


        return redirect()->route('view.couresels')->with('success','Product Created');

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
