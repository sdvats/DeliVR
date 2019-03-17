@extends('layouts.base_layout')
@section('content')
    <main>
        <div class="container">
            <!--Grid row-->
            <div class="row py-5">
                <!--Grid column-->
                <div class="col-md-6">
                    <h3 class="text-center">Truck Details</h3>

                    Truck License Number: <h3>{{ $truck -> license_number }}</h3> <br>

                    Truck Capacity: <h3>{{ $truck -> truck_capacity }}</h3> <br>

                    Vehicle Type: <h3>{{ $truck -> vehicle_type }}</h3> <br>

                    Price Per KM: <h3>{{ $truck -> price_km }}</h3> <br>


                </div>

                <div class="col-md-6">
                    <br><br>

                    Price Per Kg: <h3>{{ $truck -> price_weight }}</h3> <br>

                    Departure: <h3>{{ $truck -> scheduled_dept }}</h3> <br>

                    From: <h3>{{ $truck -> from_suburb }}</h3> <br>

                    To: <h3>{{ $truck -> to_suburb }}</h3> <br>

                </div>

                    <form method="POST" action="{{ url('/truck-bookings/'.$truck -> id) }}">
                        @csrf
                        <select class="browser-default custom-select ml-3" name="booking_type">
                            <option value="" disabled selected>Booking Type</option>
                            <option value="partial">Partial</option>
                            <option value="full">Full</option>
                        </select>

                        <div class="text-center py-4 mt-3">
                            <button class="btn btn-primary" type="submit">Request Booking</button>
                        </div>

                    </form>

                <!--Grid row-->
            </div>
    </main>
@endsection