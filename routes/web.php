<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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

// ini profile
Route::get('/profile', [UserController::class, 'showProfile']);
Route::post('/profile/edit', [UserController::class, 'editProfile']);

Route::get('/transaksi', function () {
    return view('/front/transaksi');
});

// ini pemesanan
Route::get('/pembayaran', [PemesananController::class, 'pembayaran']);
Route::post('/pembayaran',[PemesananController::class, 'data']);

Route::get('/konfirmasi',  [PemesananController::class, 'konfirmasi']);
Route::post('/post-method', [PemesananController::class, 'method']);
Route::post('/post-bukti-pembayaran', [PemesananController::class, 'bukti_pembayaran']);

Route::get('/booking', function () {
    if (Auth::check()) {
        return view('/front/booking'); // or the controller action that handles the booking page
    } else {
        return redirect('/login');
    }
});

//midleware berguna sebagai pembatas atau validasi antara sudah memiliki hak akses dan yg belum
//prefix adalah pengelompokkan routing  ke satu jenis route
Route::group(['middleware' => ['auth', 'checkActive', 'role:admin|manager|staff']], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // ini user
        Route::get('pengguna', [UserController::class, 'pengguna']);
        Route::get('pengguna/create', [UserController::class, 'create']);
       // ini transaksi
        Route::get('transaksi', [TransaksiController::class, 'index']);
        Route::resource('layanan', LayananController::class);
        Route::resource('pemesanan', PemesananController::class);
        Route::get('/user', [UserController::class, 'index']);
        Route::post('/user/{user}/activate', [UserController::class, 'activate'])->name('admin.user.activate');
        Route::get('/profile', [UserController::class, 'showProfileAdmin']);
        //put dan patch adalah 2 sintak yang sama untuk pengubahan data
        Route::patch('profile/{id}', [UserController::class, 'update']);
        Route::post('/layanan/store', [LayananController::class, 'store']);
        Route::post('/pemesanan/store', [PemesananController::class, 'store']);
        Route::post('/pengguna/store', [PenggunaController::class, 'store']);
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');