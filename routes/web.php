<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PemesananController;

use App\Http\Controllers\DashboardController;


Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('layanan', LayananController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('users', UsersController::class);
Route::resource('pemesanan', PemesananController::class);

Route::post('/layanan/store', [LayananController::class, 'store']);
Route::post('/pemesanan/store', [PemesananController::class, 'store']);
Route::post('/users/store', [UsersController::class, 'store']);



});









