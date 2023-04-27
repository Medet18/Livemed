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
        $doctor_info =  Auth::guard('doctor')->user();
        $name = $doctor_info->doctor_name;
        $spec = $doctor_info->doctor_specialist;
        $email = $doctor_info->email;
        $phone_number = $doctor_info->doctor_phone;

        return view('doctorINT.doctorProfile',['name' => $name, 'specialist' => $spec, 'email' =>$email, 'doctor_phone' => $phone_number]);
    }

    public function contact(){
        return view('doctorINT.contactDoctor');
    }

}
