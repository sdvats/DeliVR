<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function adduser(Request $request){

        $input = $request -> all();

        $user = new User;
        $user -> username = $input['username'];
        $user -> full_name = $input['fullname'];
        $user -> email = $input['email'];
        $user -> password = bcrypt($input['password']);
        $user -> mobile_number = $input['mobile'];
        $user -> street_name = $input['street'];
        $user -> suburb = $input['suburb'];
        $user -> state = $input['state'];
        $user -> user_type = $input['user_type'];
        $user -> save();
        $request->session()->flash('alert-success', 'You have successful registered, Please Login!');
        return view('login');
    }
}
