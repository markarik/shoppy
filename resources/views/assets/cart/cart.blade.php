@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-8">

                <table class="table  cart_customs ">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>

                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>options</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-bordered">

{{--                    {{dd($carts[0]->option_name[0]->name)}}--}}

                    @foreach ($carts as $cart)

                        {{dd($cart->option_name)}}

                        <tr>
                            <td>
                                <div class="details_other_images imagescrollimg">
{{--                                    <img src="{{asset('/products/images/featured/'.$cart->product->featured_image_url)}}" class="card-img-top" alt="...">--}}
                                </div>
                            </td>
                            <td>{{$cart->product->name}}</td>
                            <td>
                                {{$cart->quantity}}
                            </td>
                            <td>
                                {{$cart->amount}}
                            </td>


                                <td>

                                @if(count($cart->option_name) >= 1)
                                        @foreach($cart->option_name as $option)
{{--                                            {{dd($option->name)}}--}}
                                            <div class="btn-group m-r-10">
                                                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle waves-effect waves-light" type="button">Dropdown <span class="caret"></span></button>

                                                <ul role="menu" class="dropdown-menu"><li>{{$option->name}}</li>


                                                </ul>
                                            </div>
                                        @endforeach
                                @else

                                    No Options

                                @endif
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-success cart_button ml-2">edit</a>
                                        <form action="{{route('product.delete.cart',['id'=>$cart->id])}}" method="post">
                                            {!! csrf_field() !!}
                                            <input type="submit" class="btn btn-danger cart_button ml-4" value="Remove">

                                        </form>
                                    </div>
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
                        <td>items</td>
                        <td>Sub Total</td>
                        <td>Tax</td>
                        <td>Total</td>
                    </tr>
                    </thead>
                    <tbody>


                        <tr>
                        <td>
                            <b>{{$quantitysum}}</b>

                        </td>
                        <td>
                            <b>{{$amountsum}}</b>
                        </td>

                            <td>{{$taxes->value}}</td>


                        <td><b>{{$totalcartcost}}</b></td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="d-flex">
                <div>
                    <a href="{{route('user.checkout')}}" class="btn btn-success">Checkout</a>
                </div>

                <div class="ml-auto">
                    <h5><a href="{{route('user.dashboard')}}">Continue Shopping</a></h5>
                </div>
            </div>
        </aside>

    </div>

    @include('assets.footer.footer')
@endsection

