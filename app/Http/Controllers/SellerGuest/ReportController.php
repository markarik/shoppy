<?php

namespace App\Http\Controllers\SellerGuest;

use App\OrderProduct;
use App\Seller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Khill\Lavacharts\Exceptions\InvalidCellCount;
use Khill\Lavacharts\Exceptions\InvalidColumnType;
use Khill\Lavacharts\Exceptions\InvalidDateTimeFormat;
use Khill\Lavacharts\Exceptions\InvalidLabel;
use Khill\Lavacharts\Exceptions\InvalidRowDefinition;
use Khill\Lavacharts\Exceptions\InvalidRowProperty;
use Khill\Lavacharts\Lavacharts;

class ReportController extends Controller
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

        $orders = OrderProduct::all();

        $booking_data = [];

        foreach ($orders as $order) {
            $order_month = Carbon::parse($order->created_at)->format('M');
            if (array_key_exists($order_month, $booking_data)) {
                $booking_data[$order_month] += $order->amount;
            } else {
                $booking_data[$order_month] = $order->amount;

            }
        }

        $lava = new Lavacharts;


        /*pie chart*/
        $reasons = $lava->DataTable();

        $buyers = User::all();
        $sellers = Seller::all();
        try {
            $reasons->addStringColumn('Reasons')
                ->addNumberColumn('Percent')
                ->addRow(['Buyers', count($buyers)])
                ->addRow(['Sellers ', count($sellers)]);
        } catch (InvalidCellCount $e) {
        } catch (InvalidColumnType $e) {
        } catch (InvalidLabel $e) {
        } catch (InvalidRowDefinition $e) {
        } catch (InvalidRowProperty $e) {
        }
        $lava->PieChart('IMDB', $reasons, [
            'title' => 'Buyers and Sellers',
            'is3D' => true,
            'slices' => [
                ['offset' => 0.2],
                ['offset' => 0.25],

            ]
        ]);


        /*line chart*/

        $stocksTable = $lava->DataTable();
        try {
            $stocksTable->addDateColumn('Day of Month')
                ->addNumberColumn('Projected')
                ->addNumberColumn('Official');
        } catch (InvalidColumnType $e) {
        } catch (InvalidLabel $e) {
        }

// Random Data For Example
        for ($a = 1; $a < 30; $a++) {
            try {
                $stocksTable->addRow([
                    '2015-10-' . $a, rand(800, 1000), rand(800, 1000)
                ]);
            } catch (InvalidCellCount $e) {
            } catch (InvalidRowDefinition $e) {
            } catch (InvalidRowProperty $e) {
            }
        }
        $lava->LineChart('MyStocks', $stocksTable, [
            'title' => 'Weather in October'
        ]);


        $context = [
            'order_chart_data' => $booking_data,
            'lava' => $lava
        ];


        return view('pages.seller.report.view_report', $context);

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
