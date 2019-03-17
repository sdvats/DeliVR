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


                                    <a class="navbar-brand" href="#">
                                        <img src="{{url("/img/front/delivrlogo.svg") }}" height="100" alt="mdb logo"> DeliVR
                                    </a>


                    </div>
                    <div class="col-md-6">

                        <div class="md-form ">
                            <!-- Card -->
                            <div class="card">

                                <!-- Card body -->
                                <div class="card-body">

                                    <!-- Material form register -->
                                    <form method="POST" action="{{ url("/login/login-user") }}">
                                    @csrf
                                        <p class="h4 text-center py-4">Log In</p>



                                        <!-- Material input email -->
                                        <div class="md-form">
                                            <i class="fa fa-user prefix grey-text"></i>
                                            <input type="text" id="materialFormCardEmailEx" class="form-control" name="email">
                                            <label for="materialFormCardEmailEx" class="font-weight-light">Your Email</label>
                                        </div>



                                        <!-- Material input password -->
                                        <div class="md-form">
                                            <i class="fa fa-lock prefix grey-text"></i>
                                            <input type="password" id="materialFormCardPasswordEx" class="form-control" name="password">
                                            <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
                                        </div>



                                        <div class="text-center py-4 mt-3">
                                            <button class="btn btn-primary" type="submit">Log In</button>
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