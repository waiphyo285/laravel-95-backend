<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/customers', [CustomerController::class,'index']);
Route::get('/customers/{id}', [CustomerController::class,'show']);
Route::post('/customers', [CustomerController::class,'store']);
Route::put('/customers/{id}', [CustomerController::class,'update']);
Route::delete('/customers/{id}', [CustomerController::class,'destroy']);
