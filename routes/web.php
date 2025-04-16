<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

// Route utama untuk menampilkan halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk mengelola CRUD Pelanggan
Route::resource('pelanggan', PelangganController::class);
