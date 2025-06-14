<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollmentController; // Import Controller Anda

Route::get('/', function () {
   return view ('welcome');
});

Route::get('/form_pendaftaran', function () {
   return view ('form_pendaftaran');
});

// Rute untuk halaman form pendaftaran
Route::get('/pendaftaran', [EnrollmentController::class, 'index'])->name('enrollment.index');

// Rute untuk memproses pengiriman kode pembayaran (contoh AJAX)
Route::post('/pendaftaran/proses', [EnrollmentController::class, 'processPayment'])->name('enrollment.process');

// Rute default (opsional, bisa diarahkan ke pendaftaran atau beranda lain)
Route::get('/', function () {
    return redirect()->route('enrollment.index');
});