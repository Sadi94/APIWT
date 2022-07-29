<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API test
Route::get('/customer/{id?}',[CustomerController::class,'Customers']);
Route::post('/customerAdd',[CustomerController::class,'CustomerPost']);

// Route::get('/products/list',[ProductController::class,'APIList']);
// Route::post('/products/list',[ProductController::class,'APIPost']);
Route::get('/products/list',[ProductController::class,'APIList']); 
Route::post('/AddProducts',[ProductController::class,'APIPost']);
