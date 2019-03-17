@extends('layouts.base_layout')
@section('content')
    <main>
        <div class="container">
            <!--Grid row-->
            <div class="row py-5">
                <!--Grid column-->
                <div class="col-md-12">
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
                            <th class="th-sm">Request Booking
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
                                <td><span class="table-remove">
                                            <button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><a href=" {{ url('/truck-bookings/'.$truck -> id)  }}">Request Booking</a></button>
                                    </span></td>

                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            <!--Grid row-->
        </div>
    </main>
@endsection