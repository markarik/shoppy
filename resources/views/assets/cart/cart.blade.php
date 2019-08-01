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
                    </table>
                    @foreach($carts as $cart)
                        <form action="{{route('product.change.cart', [$cart->id]) }}" method="post">
                            @csrf
                            <table class="table table_custom">
                                <tbody>

                                <tr class="table_custom_data">
                                    <td>{{$cart->product->name}}</td>
                                    <td>{{$cart->product->unit_cost}}</td>
                                    <td>
                                        <input type="number" class="form-control" value="{{$cart->quantity}}"/>
                                    </td>
                                    <td>
                                        {{$cart->amount}}
                                    </td>
                                    <td>
                                        <select class="form-control">
                                            <option>Red</option>
                                            <option>Red</option>
                                            <option>Red</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="submit">
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </form>
                    @endforeach

                    <a href="{{route('user.checkout')}}" class="button ">Checkout</a>
                </div>
            </div>
        </div>
    </div>




@endsection