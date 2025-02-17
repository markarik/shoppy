@extends('layouts.app')


@section('content')

    @include('flash-message')
    <div class="row">
        <div class="col-md-8">

            <table class="table  cart_customs ">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>

                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>options</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="table-bordered">

{{--{{dd($carts)}}--}}
                @foreach ($carts as $cart)

{{--                    {{dd($cart)}}--}}


                    <tr>
                        <td>
                            <div class="details_other_images imagescrollimg">
                                <img src="{{asset('/products/images/featured/'.$cart->product->featured_image_url)}}"
                                     class="card-img-top" alt="...">
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

{{--                            @if($cart->option_name != null)--}}
                            @if($cart  != null)

                                <select class="form-control">
                                    <option selected disabled value="options">options</option>
                                    @foreach($cart->option_name as $option)
                                        <option disabled value="options">{{$option->name}}</option>
                                    @endforeach

                                </select>

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
                <small>If it is to be delivered,<b>EXTRA CHARGES WILL BE ADDED</b>!!</small>
            </div>
            <form action="">

                <div class="d-flex">
                    <div>
                        <a href="{{route('user.checkout')}}" class="btn btn-success" type="submit">Checkout</a>
                    </div>

                    <div class="ml-auto">
                        <h5><a href="{{route('user.dashboard')}}">Continue Shopping</a></h5>
                    </div>
                </div>
            </form>
        </aside>

    </div>
    <div class="row">
        <div class="col-md-12 ml-5">


            <h2>Already Bought Products</h2>


            <p><b><i>Hit on the product name to make reviews</i></b></p>
            <div>


                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>

                        <th>Price</th>
                        <th>Date Bought</th>


                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($boughtproducts as $boughtproduct)
                        <tr>
                            <td>
                                <div class="details_other_images imagescrollimg">
                                    <img src="{{asset('/products/images/featured/'.$boughtproduct->product->featured_image_url)}}"
                                         class="card-img-top" alt="...">
                                </div>
                            </td>
                            <td>
                                <a href="{{route('user.product.details',[$boughtproduct->product->id])}}">{{$boughtproduct->product->name}}</a>
                            </td>
                            <td>{{$boughtproduct->product->unit_cost}}</td>
                            <td>{{$boughtproduct->created_at}}</td>

                            <td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>


        </div>
    </div>

    @include('assets.footer.footer')
@endsection

