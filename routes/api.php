<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PemesananController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('pemesanan', [PemesananController::class, 'index']);
Route::get('pemesanan/{id}', [PemesananController::class, 'show']);
Route::post('/pemesanan-create', [PemesananController::class, 'store']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);