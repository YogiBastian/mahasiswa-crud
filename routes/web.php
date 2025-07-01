<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome'); // tampilkan halaman sambutan
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/semua-mahasiswa', [MahasiswaController::class, 'semua'])->name('mahasiswa.semua');

Route::view('/pengaturan/tampilan', 'pengaturan.tampilan')->name('pengaturan.tampilan');
