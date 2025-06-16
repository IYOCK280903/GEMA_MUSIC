<?php
// routes/web.php


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('homepage');
});

// Halaman login
Route::get('/login', function () {
    return view('login');
});

// Halaman register (sign up)
Route::get('/register', function () {
    return view('register');
});

// Redirect /signUp ke /register agar tidak membingungkan
Route::get('/signUp', function () {
    return redirect('/register');
});

// Halaman home (jika sudah login)
Route::get('/awal', function () {
    return view('awal');
});




