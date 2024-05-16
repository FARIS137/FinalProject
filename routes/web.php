<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;



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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/navigation', function () {
    return view('/admin/navigation');
});

Route::prefix('admin')->group(function(){
    // route memanggil controller setiap fungsi,
    // (nanti linknya menggunakn url, ada didalam view)


// route dengan pemanggilan class
// Route::get('/jenis_produk', [JenisProdukController::class, 'index']);
// Route::post('/jenis_produk/store', [JenisProdukController::class, 'store']);
// Route::resource('produk', ProdukController::class);
// Route::resource('pelanggan', PelangganController::class);
// Route::get('/kartu', [KartuController::class, 'index']);
Route::resource('layanan', LayananController::class);

});








