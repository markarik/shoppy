<?php

namespace App\Http\Controllers\AdminGuest;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
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
        $constants = Setting::all();

        $data = [
            'constants'=>$constants
        ];
        return view('pages.admin.constants.view_constants',$data);
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
            'name'=>'required',
            'value'=>'required'
        ]);

        $constants = new Setting();

        $constants->name=$request->input('name');
        $constants->value=$request->input('value');
        $constants->save();

        return redirect()->back()->with('success','Constant added Successfully.');

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
        $constants = Setting::findorFail($id);
        $constants->name=$request->input('name');
        $constants->value=$request->input('value');
        $constants->save();
        return redirect()->back()->with('success','Constant has been edited Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $constant = Setting::findorFail($id);

        $constant ->delete();

        return redirect()->back()->with('success','Constant successfully deleted');
    }
}
