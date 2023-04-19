<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DoctorAuthController extends Controller
{
    public function index()
    {
        return view('doctorINT.loginDoctor');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('doctor/search')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("doctor/loginDoctor")->withSuccess('Oppes! You have entered invalid credentials');
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("doctor/loginDoctor")->withSuccess('Opps! You do not have access');
    }
    public  function  search(){
        if(Auth::check()){
            return view('search');
        }

        return redirect("doctor/loginDoctor")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
            'full_name' => $data['full_name'],
            'user_phone' => $data['user_phone'],
            'date_of_birth' => $data['date_of_birth'],
            'IIN' => $data['IIN'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'password_confirmation' => Hash::make($data['password_confirmation'])
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
//        auth('user-api')->logout();

        return Redirect('doctor/loginDoctor');
    }

    public function userProfile(){
        Auth::user();

    }
}
