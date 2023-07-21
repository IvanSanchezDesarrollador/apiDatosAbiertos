<?php

use App\Http\Controllers\InfractionController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/licenses', [LicenseController::class, 'index']);
Route::get('/infractions',[InfractionController::class, 'index']);
Route::get('/orders',[OrderController::class,'index']);
