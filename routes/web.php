<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

// Route untuk CRUD Pelanggan
Route::resource('pelanggan', PelangganController::class);
