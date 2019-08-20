
    <div>
{{--        <h2>{{$seller->store_name}}</h2>--}}

{{--        <button class="btn btn-success">DownLoad PDF</button>--}}
        <table style="width:80%">
            <thead>
            <tr>
                <th>Id</th>
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
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->user->f_name}}</td>
                        <td>{{$order->store}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->product->unit_cost}}</td>
                        <td>{{$order->amount}}</td>
                        <td>
                            {{\Carbon\Carbon::parse($order->updated_at)->format('d/m/y')}}
                        </td>
                    </tr>
    @endforeach

            </tbody>

        </table>

    </div>

