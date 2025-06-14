<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Tampilkan halaman formulir pendaftaran.
     */
    public function index()
    {
        return view('enrollment.index');
    }

    /**
     * Tangani pengiriman kode pembayaran (contoh sederhana).
     */
    public function processPayment(Request $request)
    {
        $request->validate([
            'payment_code' => 'required|string|max:255',
        ]);

        $code = $request->input('payment_code');

        // Di sini Anda akan menambahkan logika untuk memvalidasi kode pembayaran
        // Misalnya: memeriksa ke database, memanggil API pembayaran, dll.

        // Untuk contoh ini, kita hanya akan mengembalikan respons sederhana.
        // Dalam aplikasi nyata, Anda mungkin akan mengarahkan ulang atau menampilkan pesan sukses/gagal.
        return response()->json([
            'message' => 'Kode pembayaran diterima: ' . $code,
            'status' => 'success'
        ]);
    }
}