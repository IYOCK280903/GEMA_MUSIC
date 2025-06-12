<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view ('Gema Musik');
});

Route::get('/form_pendaftaran', function () {
   return view ('form_pendaftaran');
});
