<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PharmacyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/********* Route for users ********/
Route::group(['prefix' => 'user'], function ($router) {
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);
});

Route::group(['middleware' => ['auth:user-api', 'jwt.auth'], 'prefix' => 'user'], function ($router) {
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/profile', [UserController::class, 'userProfile']);
    Route::post('/refresh', [UserController::class, 'refresh']);
});


/********* Route for Doctors ********/
Route::group(['prefix' => 'doctor'], function ($router) {
    Route::post('/login', [DoctorController::class, 'login']);
    Route::post('/register', [DoctorController::class, 'register']);
});

Route::group(['middleware' => ['auth:doctor-api', 'jwt.auth'], 'prefix' => 'doctor'], function ($router) {
    Route::post('/logout', [DoctorController::class, 'logout']);
    Route::get('/profile', [DoctorController::class, 'doctorProfile']);
    Route::post('/refresh', [DoctorController::class, 'refresh']);
});


/********* Route for Pharmacies ********/
Route::group(['prefix' => 'pharmacy'], function ($router) {
    Route::post('/login', [PharmacyController::class, 'login']);
    Route::post('/register', [PharmacyController::class, 'register']);
});

Route::group(['middleware' => ['auth:pharmacy-api', 'jwt.auth'], 'prefix' => 'pharmacy'], function ($router) {
    Route::post('/logout', [PharmacyController::class, 'logout']);
    Route::get('/profile', [PharmacyController::class, 'pharmacyProfile']);
    Route::post('/refresh', [PharmacyController::class, 'refresh']);
});

