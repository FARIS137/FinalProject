<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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




// //contoh routing untk mengarahkan ke view, tnpa melakukan controller
// Route::get('/percobaan_pertama', function () {
//     return view('helo');
// });

// //contoh routing yang mengarahkan dirinya sendiri tanpa view dan controller
// Route::get('/salam', function () {
//     return "<h1>Selamat pagi peserta MSIB </h1>";
// });

// //contoh routing yang menggunakan paremeter (variabel sementara)
// Route::get('/staff/{nama}/{devisi}', function ($nama, $devisi) {
//     return 'nama pegawai ' . $nama . '<br> Departemen: ' . $devisi;
// });

// Route::get('/daftar_nilai', function () {
//     //return view yang mengarahkan  kedalam view yg didalamnya ada folder nilai dan daftar_nilai
//     return view('nilai.daftar_nilai');
// });
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });
// Route::get('/blog', function () {
//     return view('blog');
// });
// Route::get('/contact', function () {
//     return view('contact', ['nama' => 'azrul4096@gmail.com']);
// });

?>

