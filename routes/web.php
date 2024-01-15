<?php

use App\Http\Controllers\DistributorController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    return view('auth.login');
});

Auth::routes();


Route::get('/home',[DashboardController::class,'user_home'])->name('user_home');
Route::get('/user-catalog',[DashboardController::class,'user_catalog'])->name('user_catalog');
Route::resource('distributor',DistributorController::class)->except('show');
Route::resource('upload',UploadController::class)->except('show');
