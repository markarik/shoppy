@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <h3>Cart Items</h3>


                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>options</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
@foreach($carts as $cart)
                        <tr>
                            <td>{{$cart->product->name}}</td>
                            <td>{{$cart->product->unit_cost}}</td>
                            <td width="50px">

                                <input name="qty" type="number" value="{{$cart->quantity}}">


                            </td>
                            <td>{{$cart->amount}}</td>
                            <td>
                                <select class="form-control">
                                    <option value="">large</option>
                                    <option value="">medium</option>
                                    <option value="">small</option>
                                    <option value="">other</option>
                                </select>
                                <select class="form-control">
                                    <option value="" class="disabled">colour</option>
                                    <option value="">red</option>
                                    <option value="">blue</option>
                                    <option value="">white</option>
                                </select>
                            </td>

                            <td>

                                <input style="float: left"  type="submit" class="button success small" value="Ok">
                                <form action=""  method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input class="button small alert" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>

@endforeach
                        <tr>
                            <td></td>
                            <td>
                                Tax: $100 <br>
                                Sub Total: $ {{$amountsum}}<br>
                                Grand Total: $ 13145
                            </td>
                            <td>Items: {{$quantitysum}}
                            </td>
                            <td></td>
                            <td></td>

                        </tr>
                        </tbody>
                    </table>

                    <a href="{{route('user.checkout')}}" class="button ">Checkout</a>
                </div>
            </div>
        </div>
    </div>




@endsection