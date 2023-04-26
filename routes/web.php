<?php

use App\Http\Controllers\DoctorFolder\DoctorAuthController;
use App\Http\Controllers\DoctorFolder\SearchPatientController;
use App\Http\Controllers\UserFolder\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
//////////////////Client//////////////////
Route::group(['prefix' => 'user'], function ($router) {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    Route::get('registration', [AuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
});

Route::group(['middleware' => ['auth:web'], 'prefix' => 'user'], function ($router) {
    Route::get('mainpage', [AuthController::class, 'mainpage']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
   // Route::get('/profile', [AuthController::class, 'userProfile'])->name('userProfile');
});

/////////////////////Doctor
Route::group(['prefix' => 'doctor'], function ($router) {
    Route::get('login', [DoctorAuthController::class, 'index'])->name('doctor.login');
    Route::post('postLogin', [DoctorAuthController::class, 'postLoginDoctor'])->name('login.post.doctor');
});

Route::group(['middleware' => ['auth:doctor'], 'prefix' => 'doctor'], function ($router) {
    Route::get('mainPage', [DoctorAuthController::class, 'mainPage']);
    Route::get('logout', [DoctorAuthController::class, 'logout'])->name('doctor.logout');
   // Route::get('/profile', [AuthController::class, 'doctorProfile'])->name('doctorProfile');

    Route::group(['prefix' => 'edit/'], function ($router) {
        Route::get('/search', [SearchPatientController::class, 'search'])->name('doctor.search');
        Route::get('/{id}', [SearchPatientController::class, 'show_for_subadmin']);
        Route::post('/', [SearchPatientController::class, 'store']);
        Route::put('/{id}', [SearchPatientController::class, 'update']);
        Route::delete('/{id}', [SearchPatientController::class, 'destroy']);
    });
});



