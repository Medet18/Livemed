<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;


class MainPageController extends Controller
{
    //
    public function index(): \Illuminate\Http\JsonResponse
    {
        $ph =  Pharmacy::all();
        return response()->json(['Pharmacies' => $ph],200);
    }
}
