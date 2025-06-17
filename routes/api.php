<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students',[StudentController::class,'index']);
Route::get('/posts',[PostController::class,'index']);

Route::get('/customer/profile',[CustomerController::class,'getProfile']);
Route::put('/customer/update_status',[CustomerController::class,'updateStatus']);
Route::apiResource('customer',CustomerController::class);