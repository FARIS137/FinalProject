<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('front.home');
});

Route::get('/home', function () {
    return view('/front/home');
});

Route::get('/about', function () {
    return view('/front/about');
});

Route::get('/service', function () {
    return view('/front/service');
});

Route::get('/contact', function () {
    return view('/front/contact');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

Route::group(['middleware' => ['auth', 'role:admin|manager|staff']], function(){

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('layanan', LayananController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('users', UsersController::class);
Route::resource('pemesanan', PemesananController::class);

Route::post('/layanan/store', [LayananController::class, 'store']);
Route::post('/pemesanan/store', [PemesananController::class, 'store']);
Route::post('/users/store', [UsersController::class, 'store']);
Route::post('/transaksi/store', [TransaksiController::class, 'store']);

Route::resource('admin/pemesanan', PemesananController::class);



});
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





