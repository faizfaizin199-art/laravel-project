<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', \App\Http\Controllers\HomeController::class);

// GET, POST, PUT, PATCH, DELETE
// GET : HANYA MEMBACA/MELIHAT TIDAK ADA ACTION REQUEST KE FORM
// POST : REQUEST KE DALAM SERVER MENGGUNAKAN FORM
// PUT : REQUEST KE DALAM SERVER MENGGUNAKAN FORM, PUT DI PERUNTUKKAN UNTUK UPDATE DAN DATANYA BANYAK (MISAL ADA 3 KOLOM MAKA UPDATE UNTUK SEMUA KOLOM)
// PATCH : REQUEST KE DALAM SERVER MENGGUNAKAN FORM, PATCH DI PERUNTUKKAN UNTUK UPDATE DAN HANYA SATU DATA (MISAL ADA 3 KOLOM MAKA YANG DI UPDATE HANYA 1 KOLOM)
// DELETE : REQUEST KE DALAM SERVER MENGGUNAKAN FORM DELETE

Route::get('belajar-laravel', [\App\Http\Controllers\BelajarController::class, 'index']);

// PENJUMLAHAN
Route::get('penjumlahan', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('penjumlahan');
Route::post('store-tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store-tambah');

// PENGURANGAN
Route::get('pengurangan', [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('pengurangan');
Route::post('store-kurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store-kurang');

// PERKALIAN
Route::get('perkalian', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('perkalian');
Route::post('store-kali', [\App\Http\Controllers\BelajarController::class, 'storeKali'])->name('store-kali');

// PEMBAGIAN
Route::get('pembagian', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('pembagian');
Route::post('store-bagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('store-bagi');


// PREFIX --> AWALAN
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

Route::prefix('admin')->group(function(){
    Route::resource('/dashboard', \App\Http\Controllers\Admin\DashboardController::class);

    Route::resource('/contact', App\Http\Controllers\Admin\ContactController::class);
    Route::resource('/blog', App\Http\Controllers\Admin\BlogController::class);
});

// logout
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
// Register
Route::get('register', [\App\Http\Controllers\RegisterController::class, 'register']);
Route::post('register/action', [\App\Http\Controllers\RegisterController::class, 'actionRegister'])->name('register.action');
// admin
route::middleware('auth')->group(function(){
    // dashboard
    Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
});

//student
Route::get('student', [\App\Http\Controllers\Admin\StudentController::class, 'index'])->name('student');
route::post('/student/simpan', [App\Http\Controllers\Admin\StudentController::class, 'simpan']);
route::post('/student/update/{id}', [App\Http\Controllers\Admin\StudentController::class, 'update']);
route::get('/student/hapus/{id}', [App\Http\Controllers\Admin\StudentController::class, 'hapus']);