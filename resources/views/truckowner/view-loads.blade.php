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
                            <th class="th-sm">Request Booking
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
                                <td><span class="table-remove"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0">Request Booking</button></span></td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!--Grid row-->
            </div>
    </main>
@endsection