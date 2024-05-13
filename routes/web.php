<?php

use Illuminate\Support\Facades\Route;


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








