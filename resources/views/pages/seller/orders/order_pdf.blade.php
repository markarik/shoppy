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
    .order_format h1{
        display: block;
    }
    .order_format h1{
        color: #0c0c0c;
        font-size: 30px;
        text-align: left;
        text-decoration: none;
        display: inline-block;
    }

    .order_format span{
        color: #0c0c0c;
        font-size: 40px;
    }


</style>


    <div>
{{--        <img src="public/images/shoppy.png" alt="">--}}
        <h1>Customer Orders</h1>

            <div class="col-md-6 order_format ">
                <h1>
                    <span>Name :</span>{{$user->f_name}} {{$user->l_name}}
                </h1>

                <span class="span-sub">{{$checkouts->reference_code}}</span>
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

