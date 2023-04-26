<?php

namespace App\Http\Controllers\DoctorFolder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DoctorAuthController extends Controller
{
    public function index()
    {
        return view('doctorINT.loginDoctor');
    }

    public function postLoginDoctor(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

//        $login = $credentials[$this->email()];
//        return $login;

        if (Auth::guard('doctor')->attempt($credentials)) {
            return redirect()->intended('doctor/mainPage')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("doctor/login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public  function  mainPage(){
        if(Auth::guard('doctor')->check()){
            return view('indexDoctor');
        }

        return redirect("doctor/login")->withSuccess('Opps! You do not have access');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
//        auth('user-api')->logout();

        return Redirect('doctor/login');
    }

    public function doctorProfile(){
        Auth::guard('doctor')->user();

    }

}
