<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('data',[\App\Http\Controllers\dummyAPI::class,'getData']);

Route::get('list',[\App\Http\Controllers\DeviceController::class,'list']);

Route::post('add',[\App\Http\Controllers\PracticeController::class,'add']);

Route::delete('delete/{id}',[\App\Http\Controllers\PracticeController::class,'update']);

Route::apiResource('member',\App\Http\Controllers\MemberController::class);
