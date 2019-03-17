<?php

namespace App\Http\Controllers;

use App\Truck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\compare;
use App\Load;
use App\Truckbooking;


class TruckController extends Controller
{
    public function show(){

        $user = Auth::User();

        if ($user -> user_type == "truck_owner")
        {
            $trucks = Truck::where('truck_owner_id','=',auth()->user()->id)->get();
            return view("truckowner.truck-dashboard",compact('trucks'));
        }
    }

    public function add_truck(){
        $trucks = Truck::where('truck_owner_id','=',auth()->user()->id)->get();
        return view("truckowner.add_truck",compact('trucks'));
    }

    public function createtruck(Request $request)
    {
        $input = $request->all();
        $truck = new Truck;

        $truck -> license_number = $input['license_number'];
        $truck -> truck_capacity = $input['truck_capacity'];
        $truck -> vehicle_type = $input['vehicle_type'];
        $truck -> price_km = $input['price_km'];
        $truck -> price_weight = $input['price_weight'];
        $truck -> scheduled_dept = $input['scheduled_dept'];
        $truck -> from_suburb = $input['from_suburb'];
        $truck -> to_suburb = $input['to_suburb'];
        $truck -> truck_owner_id = auth()->user()->id;
        $truck -> save();
        $request->session()->flash('alert-success', 'Truck was successfully Added!');
        $trucks = Truck::where('truck_owner_id','=',auth()->user()->id)->get();
        return view('truckowner.truck-dashboard',compact('trucks'));


    }

    public function showloads()
    {
        $loads = Load::all();
        return view('truckowner.view-loads', compact('loads'));
    }
}
