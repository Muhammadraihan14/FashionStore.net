<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('Home_V');
});
Route::get('/produk', function () {
    return view('Produk_V');
});
Route::get('/about', function () {
    return view('About_V');
});
Route::get('/about', function () {
    return view('About_V');
});
Route::get('/contact', function () {
    return view('Contact_V');
});
Route::get('/home', function () {
    return view('Home_V');
});
Route::get('/login', function () {
    return view('Login_V');
});
Route::get('/register', function () {
    return view('Register_V');
});

