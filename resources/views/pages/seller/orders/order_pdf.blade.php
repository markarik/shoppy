<style>
    *{
        box-sizing: border-box;

    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;

    }
    th{
        height: 10px;
    }

    td, th {
        /*border: 1px solid #dddddd;*/
        border: 1px solid #FD9046;
        text-align: left;
        /*padding: 8px;*/
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    h1{
        text-align: center;
        text-decoration: underline;
        text-decoration-color: #FD9046;
        color: #FD9046;
    }
    .order_format{
        display: inline-block;
        position: relative;
    }
    .order_format {
        color: #0c0c0c;
        font-size: 10px !important;
        text-align: left;
        text-decoration:none;
        display: inline-block;
        /*position: absolute;*/
        top: 30px;
    }

    .order_format span{
        color: #0c0c0c;
        font-size: 40px;
    }
    .span_sub{
        font-size:15px !important;
    }

    .span_sup{
        font-size:15px !important;
        color: #FD9046 !important;
    }

    .span_elements{
        position: absolute;
        left: 500px;
    }
    .span_name{
        text-transform: uppercase;
        font-size: 25px !important;
    }


</style>


    <div>
{{--        <img src="public_path() .'/images/shoppy.png" alt="">--}}
{{--        <img src="{{public_path(['images/shoppy.png'])}}" alt="">--}}
        <h1>Customer Orders</h1>

            <div class="col-md-6 order_format ">
                <div class="span_elements">
                <span class="span_sup">Order Number :</span>
                <span class="span_sub">{{$checkouts->reference_code}}</span>
                </div>
                <div>
                    <span>Name :</span>
                    <span class="span_name">{{$user->f_name}} {{$user->l_name}}</span>
                </div>
                <div>
                    <span>Phone Number :</span>
                    <span>{{$checkouts->phone_number}}</span>
                </div>downloading orders

            </div>


        <table align="center">
            <thead>
            <tr>
{{--                <th>Id</th>--}}
                <th>Product</th>
                <th>Buyer</th>
                <th>Seller</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Ordered On</th>

            </thead>
            <tbody>

@foreach($pending_orders as $order)
{{--    ($order->product->name)--}}

                    <tr>
{{--                        <td>{{$order->id}}</td>--}}
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->user->f_name}}</td>
                        <td>{{$order->store}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->product->unit_cost}}</td>
                        <td>{{$order->amount}}</td>
                        <td>
                            {{\Carbon\Carbon::parse($order->created_at)->format('d/m/y H:i:s')}}
                        </td>
                    </tr>
    @endforeach

            </tbody>

        </table>

    </div>

