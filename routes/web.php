<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
//Route::group(['prefix' => 'user'], function ($router) {
//    Route::get('login', [AuthController::class, 'index'])->name('login');
//    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
//    Route::get('registration', [AuthController::class, 'registration'])->name('register');
//    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
//});
//
//
//Route::group(['middleware' => ['auth'], 'prefix' => 'user'], function ($router) {
//    Route::get('dashboard', [AuthController::class, 'dashboard']);
//    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
//    Route::get('/profile', [AuthController::class, 'userProfile'])->name('userprofile');
//});

//////////////////Test//////////////////
Route::group(['prefix' => 'user'], function ($router) {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    Route::get('registration', [AuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
});

Route::group(['middleware' => ['web'], 'prefix' => 'user'], function ($router) {
//    Route::get('dashboard', [AuthController::class, 'dashboard']);
    Route::get('mainpage', [AuthController::class, 'mainpage']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [AuthController::class, 'userProfile'])->name('userprofile');
});

/////////////////////Doctor
Route::group(['prefix' => 'doctor'], function ($router) {
    Route::get('/login', [AuthController::class, 'index'])->name('doctor.login');
    Route::post('/post-login', [AuthController::class, 'postLogin'])->name('doctor.login.post');
    });

Route::group(['middleware' => ['web'], 'prefix' => 'doctor'], function ($router) {
    Route::get('dashboard', [AuthController::class, 'dashboard']);
    Route::get('search', [AuthController::class, 'search']);
    Route::get('logout', [AuthController::class, 'logout'])->name('doctor.logout');
//    Route::get('/profile', [AuthController::class, 'userProfile'])->name('userprofile');
});



