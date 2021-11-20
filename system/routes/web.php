<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Produkcontroller;
use App\Http\Controllers\Usercontroller;







  // route hal user
Route::get('/', function () {
    return view('Home_V');
});
Route::get('Produk', function () {
    return view('Produk_V');
});
Route::get('/detail produk', function () {
    return view('Detail_produk_V');
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
  // end route hal user


Route::get('/login admin', function () {
    return view('Login_aV');
});
Route::get('/register admin', function () {
    return view('Register_aV');
});


Route::get('beranda', [Admincontroller::class, 'showBeranda']);
Route::get('katagori', [Admincontroller::class, 'showKatagori']);
Route::get('user', [Admincontroller::class, 'showUser']);



Route::get('produk', [Produkcontroller::class, 'index']);
Route::get('produk/create', [Produkcontroller::class, 'create']);
Route::post('produk', [Produkcontroller::class, 'store']);
Route::get('produk/{produk}', [Produkcontroller::class, 'show']);
Route::get('produk/{produk}/edit', [Produkcontroller::class, 'edit']);
Route::put('produk/{produk}', [Produkcontroller::class, 'update']);
Route::delete('produk/{produk}', [Produkcontroller::class, 'destroy']);



// Route::get('admin', [Admincontroller::class, 'index']);
// Route::get('admin/create', [Admincontroller::class, 'create']);
// Route::post('admin', [Admincontroller::class, 'store']);
// Route::get('admin/{admin}', [Admincontroller::class, 'show']);
// Route::get('admin/{admin}/edit', [Admincontroller::class, 'edit']);
// Route::put('admin/{admin}', [Admincontroller::class, 'update']);
// Route::delete('admin/{admin}', [Admincontroller::class, 'destroy']);



Route::get('user', [Usercontroller::class, 'index']);
Route::get('user/create', [Usercontroller::class, 'create']);
Route::post('user', [Usercontroller::class, 'store']);
Route::get('user/{user}', [Usercontroller::class, 'show']);
Route::get('user/{user}/edit', [Usercontroller::class, 'edit']);
Route::put('user/{user}', [Usercontroller::class, 'update']);
Route::delete('user/{user}', [Usercontroller::class, 'destroy']);













