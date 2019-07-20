@extends('layouts.app')

@section('content')
    <div class="col-md-10 details_accordions checkout_accordion">
        <div class="accordion" id="accordionExample">
            <button class="collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Address Details
            </button>


            <div id="collapseOne" class="collapse details_accordion_content" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="form_checkout_custom">
                    {{--<form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <label>First</label>
                            </div>
                            <div class="col-md-4">Side B</div>
                        </div>
                    </form>--}}
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Last Name</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputState">Phone Number</label>
                                <input type="number" class="form-control" name="phonenumber" id="inputPhoneNumber">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Region</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">save and Continue to Delivery</button>
                    </form>
                </div>
            </div>


            <div id="headingTwo">

                <button class="collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Delivery Method
                </button>

            </div>
            <div id="collapseTwo" class="collapse details_accordion_content" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="form_delivery_checkout">
                    <form action="">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                        <button type="submit" class="btn btn-primary">Save and move to Payments</button>
                    </form>

                </div>
            </div>

            <div id="headingThree">

                <button class=" collapsed details_accordion" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Payment Methods
                </button>

            </div>
            <div id="collapseThree" class="collapse details_accordion_content" aria-labelledby="headingThree" data-parent="#accordionExample">
                <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </p>
            </div>

        </div>
    </div>

@include('assets.footer.footer')

@endsection