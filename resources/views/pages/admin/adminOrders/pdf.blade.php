<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;

    }
    th{
        height: 50px;
    }

    td, th {
        /*border: 1px solid #dddddd;*/
        border: 1px solid #FD9046;
        text-align: left;
        padding: 8px;
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

</style>


    <div>
        <h1>Shoppy Orders</h1>
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

@foreach($orders as $order)
{{--    {{dd($order->product->name)}}--}}

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

