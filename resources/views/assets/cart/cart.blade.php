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
                        <th>Total Amount</th>
                        <th>options</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-bordered">

{{--                    {{dd($carts[0]->option_name[0]->name)}}--}}

                    @foreach ($carts as $cart)

{{--                        {{dd($cart->option_name)}}--}}

                        <tr>
                            <td>
                                <div class="details_other_images imagescrollimg">
                                    <img src="{{asset('/products/images/featured/'.$cart->product->featured_image_url)}}" class="card-img-top" alt="...">
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

                                @if($cart->option_name[0] == null)

                                        No Options

                                @else

                                    <select class="form-control">
                                        <option selected  disabled value="options">options</option>
                                        @foreach($cart->option_name as $option)
                                            <option disabled value="options">{{$option->name}}</option>
                                        @endforeach

                                    </select>

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
                                <img src="{{asset('/products/images/featured/'.$boughtproduct->product->featured_image_url)}}" class="card-img-top" alt="...">
                            </div>
                            </td>
                            <td><a href="{{route('user.product.details',[$boughtproduct->product->id])}}">{{$boughtproduct->product->name}}</a></td>
                            <td>{{$boughtproduct->product->unit_cost}}</td>
                            <td>{{$boughtproduct->created_at}}</td>

                            <td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
{{--            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
{{--            Why do we use it?--}}

{{--            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).--}}

        </div>
    </div>

    @include('assets.footer.footer')
@endsection

