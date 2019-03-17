@extends('layouts.base_layout')
@section('slider')
    @include('layouts.slider')
@stop
@section('content')

    <main>
        <div class="container">
            <!--Grid row-->
            <div class="row py-5">
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="col-md-6">


                        <a class="navbar-brand" href="#">
                            <img src="{{url("/img/front/delivrlogo.svg") }}" height="100" alt="mdb logo"> DeliVR
                        </a>


                    </div>
                </div>
                <div class="col-md-6">

                    <div class="md-form ">
                        <!-- Card -->
                        <div class="card">

                            <!-- Card body -->
                            <div class="card-body">

                                <!-- Material form register -->
                                <form method="POST" action="{{ url('/register/register-user') }}">
                                    @csrf
                                    <p class="h4 text-center py-4">Sign up</p>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="username">
                                        <label for="materialFormCardNameEx" class="font-weight-light">User Name</label>
                                    </div>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="fullname">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Full name</label>
                                    </div>

                                    <!-- Material input email -->
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="email" id="materialFormCardEmailEx" class="form-control" name="email">
                                        <label for="materialFormCardEmailEx" class="font-weight-light">Your email</label>
                                    </div>

                                    <!-- Material input password -->
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix grey-text"></i>
                                        <input type="password" id="materialFormCardPasswordEx" class="form-control" name="password">
                                        <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
                                    </div>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class="fa fa-mobile prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="mobile">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Mobile Number</label>
                                    </div>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class="fa fa-street-view prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="street">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Street Name</label>
                                    </div>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class="fa fa-address-card prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="suburb">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Suburb</label>
                                    </div>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class="fa fa-flag-usa prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="state">
                                        <label for="materialFormCardNameEx" class="font-weight-light">State</label>
                                    </div>

                                    <select class="browser-default custom-select" name="user_type">
                                        <option value="" disabled selected>Type of User</option>
                                        <option value="truck_owner">Truck Owner</option>
                                        <option value="loader">Loader</option>
                                    </select>

                                    <!-- Default inline 3-->
                                    <div class="custom-control custom-checkbox ml-4">
                                        <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                        <label class="custom-control-label" for="defaultInline3">Please Check the Terms of Services</label>
                                    </div>

                                    <div class="text-center py-4 mt-3">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </div>
                                </form>
                                <!-- Material form register -->

                            </div>
                            <!-- Card body -->

                        </div>
                        <!-- Card -->
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </main>

@stop
