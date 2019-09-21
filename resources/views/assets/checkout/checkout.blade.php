@extends('layouts.app')

@section('content')
@foreach($userinfos as $userinfo)


        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-2">
                    <form action="{{route('user.checkout.store')}}" method="post" class="checkout_form">
                        {!! csrf_field() !!}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="inputEmail4" value="{{$userinfo->f_name}}" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" value="{{$userinfo->l_name}}" disabled>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" name="city" id="inputCity">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState">Phone Number</label>
                                <input type="text" class="form-control" name="phonenumber" id="inputPhoneNumber" value="{{$userinfo->phone_number}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Region</label>
                                <select name="region" id="" class="form-control">
                                    @foreach($regions as $region)
                                        <option value="{{$region->id}}">{{$region->region_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save and move to Payments</button>
                    </form>

                </div>
            </div>
        </div>





@endforeach


@include('assets.footer.footer')

@endsection