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
                                    <a class="nav-link active" href="#">Your Loads</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body text-left">

                            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th class="th-sm">Pick Up Address
                                    </th>
                                    <th class="th-sm">Delivery Address
                                    </th>
                                    <th class="th-sm">Pick Up Date
                                    </th>
                                    <th class="th-sm">Service Type
                                    </th>
                                    <th class="th-sm">Load Type
                                    </th>
                                    <th class="th-sm">Load Dimension
                                    </th>
                                    <th class="th-sm">Load Weight
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($loads as $load)
                                <tr>
                                    <td>{{ $load -> pick_street }}&nbsp;{{ $load -> pick_suburb }}&nbsp;{{ $load -> pick_state }}</td>
                                    <td>{{ $load -> del_street }}&nbsp;{{ $load -> del_suburb }}&nbsp;{{ $load -> del_state }}</td>
                                    <td>{{ $load -> pick_date }}</td>
                                    <td>{{ $load -> service_type }}</td>
                                    <td>{{ $load -> load_type }}</td>
                                    <td>{{ $load -> load_dim }}</td>
                                    <td>{{ $load -> load_weight }}</td>
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