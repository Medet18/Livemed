<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HospitalController extends Controller
{
    public  function setHospital(Request $request)
    {
        $hsp = Hospital::create([

        ]);
    }
}
