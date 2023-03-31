<?php

namespace App\Http\Controllers\UserFolder;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use Illuminate\Support\Facades\DB;


class MainPageController extends Controller
{
    //
    public function index(): \Illuminate\Http\JsonResponse
    {
        $ph =  Pharmacy::all();
        return response()->json(['Index' => $ph],200);
    }


    public function getHospitals(): \Illuminate\Http\JsonResponse
    {
        $hp = DB::table('hospitals')->select('id','hospital_name', 'hospital_address')->get();
        return response()->json(['Hospitals'=> $hp], 200);
    }

    public function getHospital($name): \Illuminate\Http\JsonResponse
    {
        $hp = DB::table('hospitals')->select(
            'id',
                    'hospital_name',
                    'hospital_address',
                    'hospital_graphic',
                    'hospital_phone',
                    'Hospital_email',
                    'hospital_website')->where('hospital_name', $name)->first();

        return response()->json(['Hospital'=> $hp], 200);

    }

    public function getMedicines(): \Illuminate\Http\JsonResponse
    {
        $med = DB::table('medicines')->select('id','product_name', 'code_atx')->get();
        return response()->json(['Medicines'=> $med], 200);
    }

    public function getPharmacies(): \Illuminate\Http\JsonResponse
    {
        $ph = DB::table('pharmacies')->select('id','pharmacy_name', 'pharmacy_address')->get();
        return response()->json(['Pharmacies'=> $ph], 200);
    }

    public function getPharmacy($name): \Illuminate\Http\JsonResponse
    {
        $ph = DB::table('pharmacies')->select(
            'id',
                    'pharmacy_name',
                    'pharmacy_address',
                    'pharmacy_phone',
                    'email')->where('pharmacy_name', $name)->first();

        return response()->json(['Pharmacies'=> $ph], 200);

    }


}
