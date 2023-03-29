<?php

namespace App\Http\Controllers;

use App\Models\Medicines;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MedicinesController extends Controller
{
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        try{

            $med = new Medicines();
            Medicines::create([
                'pharmacy_id' => auth('pharmacy-api')->user()->id,
                'product_name' => $request->product_name,
                'code_atx' => $request->code_atx,
                'product_level'=>$request->product_level,
                'release_form'=>$request->release_form

            ]);

             return response()->json(['Message'=>'News successfully stored!'], 200);

        } catch(\Exception $e){
            return response()->json(['Message' => 'Something went wrong!'],500);//'Something went wrong!'], 500);
            //return response()->json(['Exception' => $e], 500);
        }
    }
}
