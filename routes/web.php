<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});


Route::get('add-customer',[CustomerController::class, 'add-customer']);
Route::get('show-mobile/{id}',[CustomerController::class, 'show-mobile']);
Route::get('show-customer/{id}',[MobileController::class, 'show-customer']);