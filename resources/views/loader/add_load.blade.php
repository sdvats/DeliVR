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
                                <form method="POST" action="{{ url('/add-loads') }}">
                                    @csrf
                                    <p class="h4 text-center py-4">Add Load</p>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="pick_street">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Pick up Street Name</label>
                                    </div>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="pick_suburb">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Pick up Suburb</label>
                                    </div>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="pick_state">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Pick up State</label>
                                    </div>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="del_street">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Delivery Street Name</label>
                                    </div>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="del_suburb">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Delivery Suburb</label>
                                    </div>

                                    <!-- Material input text -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="del_state">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Delivery State</label>
                                    </div>

                                    <!-- Material input password -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardPasswordEx" class="form-control" name="pick_date">
                                        <label for="materialFormCardPasswordEx" class="font-weight-light">Pick Up Date Time (dd-mm-yyyy HH:mm)</label>
                                    </div>

                                    <select class="browser-default custom-select ml-3" name="service_type">
                                        <option value="" disabled selected>Service Type</option>
                                        <option value="express">Express (Within 2 days)</option>
                                        <option value="standard">Standard (Within 7 days)</option>
                                    </select>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="load_type">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Specify the load in one word</label>
                                    </div>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="load_dim">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Specify Load Dimension (in cm approx)</label>
                                    </div>

                                    <!-- Material input Mobile Number -->
                                    <div class="md-form">
                                        <i class=" prefix grey-text"></i>
                                        <input type="text" id="materialFormCardNameEx" class="form-control" name="load_weight">
                                        <label for="materialFormCardNameEx" class="font-weight-light">Specify the Load Weight (in kg approx)</label>
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