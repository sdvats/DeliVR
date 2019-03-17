@extends('layouts.base_layout')
@section('content')
    <main>
        <div class="container">
            <!--Grid row-->
            <div class="row py-5">
                <!--Grid column-->
                <div class="col-md-12">

                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Dashboard</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card-body text-left">

                                    Name: {{ auth()->user()->full_name }} <br><br>
                                    Mobile Number: {{ auth()->user()->mobile_number }} <br><br>
                                    Address: {{ auth()->user()->street_name }} &nbsp; {{ auth()->user()->suburb }} &nbsp; {{ auth()->user()->state }}<br><br>
                                    Email: {{ auth()->user()->email }}
                                    <br><br>
                                    <button type="button" class="btn btn-primary">Update Details</button>


                            </div>
                        </div>

                </div>

                <div class="col-md-12">

                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Your Trucks</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body text-left">

                            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th class="th-sm">Vehicle  Number
                                    </th>
                                    <th class="th-sm">Capacity
                                    </th>
                                    <th class="th-sm">Type
                                    </th>
                                    <th class="th-sm">Price Per KM
                                    </th>
                                    <th class="th-sm">Price Per KG
                                    </th>
                                    <th class="th-sm">Scheduled Departure
                                    </th>
                                    <th class="th-sm">From Suburb
                                    </th>
                                    <th class="th-sm">To Suburb
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trucks as $truck)
                                <tr>
                                    <td>{{ $truck -> license_number }}</td>
                                    <td>{{ $truck -> truck_capacity }}</td>
                                    <td>{{ $truck -> vehicle_type }}</td>
                                    <td>{{ $truck -> price_km }}</td>
                                    <td>{{ $truck -> price_weight }}</td>
                                    <td>{{ $truck -> scheduled_dept }}</td>
                                    <td>{{ $truck -> from_suburb }}</td>
                                    <td>{{ $truck -> to_suburb }}</td>
                                </tr>
                                    @endforeach

                                </tbody>

                            </table>



                        </div>
                    </div>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </main>
    @endsection