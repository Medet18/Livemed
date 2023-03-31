<?php

namespace App\Http\Controllers\UserFolder;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{

    public function  getAppointments(): \Illuminate\Http\JsonResponse
    {
        $ap = Appointment::select(
            'id',
            'appointment_reason',
            'appointment_date',
            'hospital_name',
            'doctor_specialist',
            'appointment_number',
            'appointment_user_id' )->where('appointment_user_id',  auth('user-api')->user()->id)->get();

        return response()->json(["Appointments"=>$ap],200);
    }
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $did = DB::table('doctors')->where('doctor_specialist', $request->doctor_specialist)->first();
        try{

//            $news = new Appointment();
            Appointment::create([
                'appointment_reason' => $request->appointment_reason,
                'appointment_date' => Carbon::create($request->appointment_date)->toDateString(),
                'hospital_name' => $request->hospital_name,
                'doctor_specialist' => $request->doctor_specialist,
                'appointment_number'=> $request->appointment_number,
                'appointment_user_id' => auth('user-api')->user()->id,
                'appointment_doctor_id' => $did->id,
            ]);


            return response()->json(['message' => 'Appointment successfully stored!'], 200);

        } catch(\Exception $e){
//            return response()->json(['message' =>'Something went wrong!'], 500);
            return response()->json(['Exception' => $e], 500);
        }
    }

    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $did = DB::table('doctors')->where('doctor_specialist', $request->doctor_specialist)->first();

        try{
            $ap = Appointment::find($id);

            if(!$ap){
                return response()->json(['message' =>  'not_found'],404);
            }
            elseif($ap->appointment_user_id == auth('user-api')->user()->id){

                $ap->appointment_reason = $request->appointment_reason;
                $ap->appointment_date = Carbon::create($request->appointment_date)->toDateString();
                $ap->hospital_name = $request->hospital_name;
                $ap->doctor_specialist = $request->doctor_specialist;
                $ap->appointment_number= $request->appointment_number;
                $ap->appointment_doctor_id = $did->id;



                $ap->save();
                return response()->json(['message' =>'Appointment successfully updated!'], 200);
            }
            else{
                return response()->json(['message' => "U can't update! ,It's not ur's appointment. U can edit only urs appointments!"],200);
            }

        } catch(\Exception $e){
//            return response()->json([__('word.message') => __('word.s_w_wrong')],500);
            return response()->json(['message' => $e],500);
        }
    }

    public function destroy($lang, $id): \Illuminate\Http\JsonResponse
    {
        $news = Appointment::find($id);
        if(!$news){
            return response()->json(['message' =>'not_found'], 404);
        }
        elseif($news->subadmin_id == auth('user-api')->user()->id){


            $news->delete();

            return response()->json(['message' =>'News successfully deleted!'], 200);
        }
        else{
            return response()->json(['message' => "U can't delete news, Delete only urs new"], 200);
        }
    }

}
