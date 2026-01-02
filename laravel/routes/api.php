<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Bu satır tüm API fonksiyonlarını (index, store, show, update, destroy) tek seferde bağlar
Route::apiResource('customersapi', CustomerApiController::class);