@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-8">

                <table class="table table_custom cart_customs ">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>

                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>options</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-bordered">


                    @foreach ($carts as $cart)


                        <tr >
                            <td>{{$cart->id}}</td>
                            <td>{{$cart->product->name}}</td>
{{--                            <td>{{$cart->product->unit_cost}}</td>--}}
                            <td>
                                {{$cart->quantity}}
                            </td>
                            <td>
                                {{$cart->amount}}
                            </td>
                            <td>
                                <div class="btn-group m-r-10">
                                    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle waves-effect waves-light" type="button">Dropdown <span class="caret"></span></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                    </ul>
                                </div>


                            </td>
                            <td class="d-flex p-0">

                                <a href="" class="btn btn-success cart_button ml-2">edit</a>
                                <form action="{{route('product.delete.cart',['id'=>$cart->id])}}" method="post">
                                    {!! csrf_field() !!}
                                <input type="submit" class="btn btn-danger cart_button ml-4" value="Remove">

                                </form>
{{--                                <button class="btn btn-success cart_button">edit</button>--}}
{{--                                <button class="btn btn-danger cart_button">Remove</button>--}}


                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>


        </div>

        <aside class="col-md-3">

            <div>
                <table class="table table-bordered small_table">
                    <thead>
                    <tr>
                        <td>Sub Total</td>
                        <td>Total</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>10000</td>
                        <td>10000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href="{{route('user.checkout')}}" class="btn btn-success">Checkout</a>
            </div>
        </aside>

    </div>
@endsection

