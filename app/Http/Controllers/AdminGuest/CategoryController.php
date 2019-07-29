<?php

namespace App\Http\Controllers\AdminGuest;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('pages.admin.categories.categoriesView')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view ('pages.admin.categories.categoryformadd')->with('categories',$categories);

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

        Validator::make($request->all(),[
            'name'=>'required'
        ])->validate();

//        dd($request->all());

        $category =new Category();
        $category ->name=$request->input('name');
        $category ->parent_id=$request->input('parent_id');


        $category->save();
//        dd($category->all());

        return redirect()->route('add.category')->with('success','Category Created');

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
        $categories = Category::findorFail($id);

        return view('pages.admin.categories.edit_categories')->with('categories',$categories);
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
//         dd($request->all());

        Validator::make($request->all(),[
            'name'=>'required'
        ])->validate();

//        dd($request->all());

        $category =Category::findorFail($id);
        $category ->name=$request->input('name');
        $category ->parent_id=$request->input('parent_id');


        $category->save();
//        dd($category->all());

        return redirect()->route('add.category')->with('success','Category Created');


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
