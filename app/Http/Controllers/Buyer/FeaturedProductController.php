<?php

namespace App\Http\Controllers\Buyer;

use App\Category;
use App\Offer;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class FeaturedProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        dd($request->all());
        $offers = Offer::all();
        $categories = Category::where('parent_id', NULL)->get();


        if ($request['from'] != null && $request['to'] != null) {

            $from = $request->from;
            $to = $request->to;


            $featured = Product::whereBetween('unit_cost', [$from, $to])->get();




        }elseif($request['from'] != null && $request['to'] == null){
            $from = $request->from;

            $featured = Product::select("products.*")
                ->where('unit_cost', '>=', $from)->get();



        }elseif($request['from'] == null && $request['to'] != null) {
            $to = $request->to;

            $featured = Product::select("products.*")
                ->where('unit_cost', '<=', $to)->get();

        }else{
            return redirect()->back()->with('error','Please Insert Variables to search');
        }

        $data = [
            'featured' => $featured,
            'offers' => $offers,
            'categories' => $categories,

        ];


//        dd($request->all());
        return view('assets.featured_cards_search', $data);

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
