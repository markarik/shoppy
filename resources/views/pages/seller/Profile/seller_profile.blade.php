@extends('layouts.master')

@section('content')

    <div class="col-md-12 offset-md-1 mt-5">

        <div class="row profile">
            <div class="col-md-4 ">
                <h6 class="profiles">Change Password</h6>
                <form enctype="multipart/form-data" method="post"
                      action="{{route('seller.profile.update.password',\Illuminate\Support\Facades\Auth::user()->id)}}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="formGroupExampleInput">Old Password</label>
                        <input type="password" class="form-control" id="formGroupExampleInput"
                               name="old_password">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">New Password</label>
                        <input type="password" class="form-control" id="formGroupExampleInput2"
                               name="password">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Confirm New Password</label>
                        <input type="password" class="form-control" id="formGroupExampleInput2"
                                name="confirm_password">
                    </div>

                    <button type="submit" class="btn btn-success prof_button">Update Password</button>
                </form>
            </div>
            <div class="col-md-6">
                <h6 class="profiles">User Details</h6>


                <form method="post"
                      action="{{route('seller.profile.update',\Illuminate\Support\Facades\Auth::user()-> id)}}">
                    {!! csrf_field() !!}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" class="form-control" name="f_name" value="{{$sellers->f_name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Last Name</label>
                            <input type="text" class="form-control" name="l_name" value="{{$sellers->l_name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$sellers->email}}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">County</label>
                            <input type="text" class="form-control" name="county" value="{{$sellers->county}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Store Name</label>
                            <input type="text" class="form-control" name="store_name" value="{{$sellers->store_name}}" disabled>

                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputCity">Bussiness Number</label>
                            <input type="text" class="form-control"  name="bussiness_number" value="{{$sellers->business_no}}" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Phone Number</label>
                            <input type="text" class="form-control" name="phone_name" value="{{$sellers->phone_number}}">

                        </div>

                    </div>

                    <button type="submit" class="btn btn-success prof_button">Update Profile</button>
                </form>
            </div>
        </div>

    </div>

@endsection