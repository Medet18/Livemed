<?php

namespace App\Http\Controllers\UserFolder;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use Illuminate\Support\Facades\DB;


class MainPageController extends Controller
{
//    public function index()
//    {
//        $ph =  Pharmacy::all();
//        return response()->json(['Index' => $ph],200);
//    }
    public function getReceipts()
    {
        return view('client.receipts');
    }
    public function getReceiptPage()
    {
        return view('client.recept_page');
    }



    public function getHospitals()
    {
        $hp = DB::table('hospitals')->select('id','hospital_name', 'hospital_address')->get();
//        return response()->json(['Hospitals'=> $hp], 200);
        return view('client.hospitals');
    }

    public function getHospital($name)
    {
        $hp = DB::table('hospitals')->select(
            'id',
                    'hospital_name',
                    'hospital_address',
                    'hospital_graphic',
                    'hospital_phone',
                    'Hospital_email',
                    'hospital_website')->where('hospital_name', $name)->first();

//        return response()->json(['Hospital'=> $hp], 200);
        return view('client.hospital_page');
    }
    public function getHospitalPage(){
        return view('client.hospital_page');
    }

    public function getMedicines()
    {
        $med = DB::table('medicines')->select('id','product_name', 'code_atx')->get();
//        return response()->json(['Medicines'=> $med], 200);
        return view('client.medicines');
    }

    public function getPharmacies()
    {
        $ph = DB::table('pharmacies')->select('id','pharmacy_name', 'pharmacy_address')->get();
//        return response()->json(['Pharmacies'=> $ph], 200);
        return view('client.pharmacies');
    }

    public function getPharmacy($name)
    {
        $ph = DB::table('pharmacies')->select(
            'id',
                    'pharmacy_name',
                    'pharmacy_address',
                    'pharmacy_phone',
                    'email')->where('pharmacy_name', $name)->first();

//        return response()->json(['Pharmacies'=> $ph], 200);
        return view('client.pharmacy_page');
    }
    public function getPharmacyPage(){
        return view('client.pharmacy_page');
    }


}
