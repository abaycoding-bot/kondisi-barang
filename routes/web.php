<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;

// 1. Saat pertama kali dibuka, langsung arahkan ke halaman login
Route::get('/', function () {
    return redirect('/login');
});

// 2. Halaman Dashboard
Route::get('/dashboard', function () {
    $totalAset      = \App\Models\Barang::count();
    $asetBaik       = \App\Models\Barang::where('kondisi', 'Baik')->count();
    $asetPerbaikan  = \App\Models\Barang::where('kondisi', 'Perbaikan')->count();
    $asetRusak      = \App\Models\Barang::where('kondisi', 'Rusak')->count();

    return view('admin.index', compact('totalAset', 'asetBaik', 'asetPerbaikan', 'asetRusak'));
})->middleware(['auth', 'verified'])->name('dashboard');

// 3. Route Profil Bawaan Breeze
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 4. Route Halaman Tabel Aset Tambahan (Opsional)
Route::get('/admin/tables', function () {
    return view('admin.tables');
})->middleware(['auth'])->name('admin.tables');

// 5. Route CRUD Barang / Aset
Route::middleware(['auth'])->group(function () {
    Route::resource('admin/barang', BarangController::class);
});

require __DIR__.'/auth.php';