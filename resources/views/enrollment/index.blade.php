@extends('layouts.app')

@section('title', 'Form Pendaftaran')

@section('content')
<div class="payment-box">
    <h2>Masukan Kode Pembayaran</h2>
    {{-- Tambahkan CSRF token untuk keamanan form --}}
    <input type="text" id="paymentCode" placeholder="Masukkan kode di sini">
    <button id="submitPaymentCode">Masuk</button>
</div>
@endsection