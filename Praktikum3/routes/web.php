<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LaporanController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// ===== LaporBanjir =====
Route::redirect('/', '/lapor');

Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/lapor/konfirmasi', [LaporanController::class, 'konfirmasi'])->name('laporan.konfirmasi');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
