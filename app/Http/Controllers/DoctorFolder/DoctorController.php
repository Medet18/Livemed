<?php

namespace App\Http\Controllers\DoctorFolder;


use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class DoctorController extends Controller
{

    /**
     * @throws ValidationException
     */
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(),[
            'doctor_name'=>'required|string|between:1,100',
            'doctor_phone' => 'required|numeric|digits:11',
            'doctor_specialist'=>'required|string|between:1,100',
            'email'=>'required|string|email|max:100|unique:doctors',
            'password'=>'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $doctor = Doctor::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' =>  'Doctor successfully registered!',
            'Doctor' => $doctor
        ],201);

    }

    /**
     * @throws ValidationException
     */
    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator =  Validator::make($request->all(),[
            'email'=>'required|max:100|exists:doctors,email',
            'password'=>['required','string','min:6'],
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        if(! $token = auth('doctor-api')->attempt($validator->validated())){
            return response()->json(['error' =>  'unauthorized'], 401);
        }
        return $this->createNewToken($token);
    }

    public function doctorProfile(): \Illuminate\Http\JsonResponse
    {
        return response()->json(auth('doctor-api')->user());
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth('doctor-api')->logout();
        return response()->json(['message' => 'Doctor successfully logged out!']);
    }


    public function refresh(): \Illuminate\Http\JsonResponse
    {
        return $this->createNewToken(auth('doctor-api')->refresh());
    }

    public function createNewToken($token): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => strtotime(date('Y-m-d H:i:s', strtotime("+60 min"))),
            'Doctor' => auth('doctor-api')->user()
        ]);
    }
}
