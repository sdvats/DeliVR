<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{

        public function authenticate(Request $request)
        {
            $input = $request->all();
            $email = $input['email'];
            $password = $input['password'];

            $user_data = array(
                'email' => $email,
                'password' => $password
            );

            if(Auth::attempt($user_data))
            {
                $user = Auth::User();

                $user_type = $user -> user_type;

                if ($user_type == 'truck_owner'){
                    return redirect('/truck-dashboard');
                }

                if ($user_type == 'loader'){
                    return redirect('/load-dashboard');
                }


            }

        }

        public function logout(Request $request){
            Auth::logout();
            $request->session()->flash('alert-success', 'Successfully  Logged Out!');
            return view("login");
        }

}
