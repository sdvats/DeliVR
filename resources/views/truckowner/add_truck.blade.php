@extends('layouts.base_layout')
@section('content')
    <main>
        <div class="container">
            <!--Grid row-->
            <div class="row py-5">
                <!--Grid column-->
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <div class="md-form ">
                        <!-- Card -->
                        <div class="card">

                            <!-- Card body -->
                            <div class="card-body">

                                <!-- Material form register -->
                                <form method="POST" action="{{ url('/add-trucks') }}">
                                    @csrf
                                    <p class="h4 text-center py-4">Add Truck</p>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="license_number">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Truck License Number (XXX-XXX)</label>
                                    </div>

                                    <select class="browser-default custom-select ml-3" name="truck_capacity">
                                        <option value="" disabled selected>Capacity of Truck</option>
                                        <option value="2_ton"> 2 ton</option>
                                        <option value="4_ton">4 ton</option>
                                        <option value="5_ton">5 ton</option>
                                        <option value="10_ton">10 ton</option>
                                    </select>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="vehicle_type">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Vehicle Type</label>
                                    </div>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="price_km">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Price Per Kilometer</label>
                                    </div>

                                    <!-- Material input email -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardEmailEx" class="form-control" name="price_weight">
                                        <label for="materialFormCardEmailEx" class="font-weight-light">Price Per Kg</label>
                                    </div>

                                    <!-- Material input password -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardPasswordEx" class="form-control" name="scheduled_dept">
                                        <label for="materialFormCardPasswordEx" class="font-weight-light">Scheduled Departure (dd-mm-yyyy)</label>
                                    </div>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="from_suburb">
                                        <label for="materialFormCardNameEx" class="font-weight-light">From Suburb</label>
                                    </div>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="to_suburb">
                                        <label for="materialFormCardNameEx" class="font-weight-light">To Suburb</label>
                                    </div>

                                    <div class="text-center py-4 mt-3">
                                        <button class="btn btn-primary" type="submit">Submit</button>
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
    @endsection