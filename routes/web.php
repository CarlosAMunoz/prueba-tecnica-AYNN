<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('city',[CityController::class, 'index']);
// Route::get('city/create',[CityController::class, 'create']);

Route::resource('city', CityController::class);
Route::resource('customer', CustomerController::class);
Route::resource('product', ProductController::class);
Route::resource('order', OrderController::class);
Route::resource('details', OrderDetailsController::class);


