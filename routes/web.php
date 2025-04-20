<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

// Daftar route CRUD untuk Pelanggan
Route::get('/pelanggan',                      [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/create',               [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan',                     [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{id}',                 [PelangganController::class, 'show'])->name('pelanggan.show');
Route::get('/pelanggan/{id}/edit',            [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}',                 [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}',              [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
