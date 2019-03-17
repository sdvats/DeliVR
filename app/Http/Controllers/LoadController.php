<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Load;
use App\Truck;

use App\Truckbooking;
use Illuminate\Support\Facades\Date;


class LoadController extends Controller
{
    public function show(){

        $user = Auth::User();

        if ($user -> user_type == "loader")
        {
            $loads = Load::where('load_owner_id','=',auth()->user()->id)->get();
            $truckbookings = Truckbooking::where('load_id','=',auth()->user()->id) -> get();
            return view("loader.load-dashboard", compact('loads', 'truckbookings'));
        }
    }

    public function add_load(){
        $loads = Load::where('load_owner_id','=',auth()->user()->id)->get();
        return view("loader.add_load",compact('loads'));
    }

    public function createload(Request $request)
    {
        $input = $request->all();
        $load = new Load;

        $load -> pick_street = $input['pick_street'];
        $load -> pick_suburb = $input['pick_suburb'];
        $load -> pick_state = $input['pick_state'];
        $load -> del_street = $input['del_street'];
        $load -> del_suburb = $input['del_suburb'];
        $load -> del_state = $input['del_state'];
        $load -> pick_date = $input['pick_date'];
        $load -> service_type = $input['service_type'];
        $load -> load_type = $input['load_type'];
        $load -> load_dim = $input['load_dim'];
        $load -> load_weight = $input['load_weight'];
        $load -> load_owner_id = auth()->user()->id;
        $load -> save();
        $request->session()->flash('alert-success', 'Load was successfully Added!');
        $loads = Load::where('load_owner_id','=',auth()->user()->id)->get();
        return view('loader.load-dashboard',compact('loads'));


    }

    public function showtrucks()
    {
        $trucks = Truck::all();
        return view('loader.view-trucks', compact('trucks'));
    }

    public function truckbooking($id)
    {
        $truck = Truck::findOrfail($id);
        return view('loader.truck-bookings',compact('truck'));
    }

    public function truckbookingrequest($id, Request $request)
    {
        $truck = Truck::findOrfail($id);

        $truckbooking = new Truckbooking;
        $truckbooking -> truck_id = $truck -> id;
        $truckbooking -> load_id = auth() ->user() -> id;
        $truckbooking -> status = "Pending";
        $input = $request->all();
        $truckbooking -> booking_type = $input['booking_type'];
        $truckbooking -> booking_date = Carbon::now();

        $truckbooking -> save();

        $request->session()->flash('alert-success', 'Truck Booking Request has been received, You will be updated once it is verified!');

        $loads = Load::where('load_owner_id','=',auth()->user()->id)->get();
        $truck = Truck::findOrfail($id);
        return view('loader.load-dashboard',compact('loads','truckbookings','truck'));

    }
}
