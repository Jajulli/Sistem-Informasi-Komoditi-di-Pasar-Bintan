<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\KomoditasController;
use App\Http\Controllers\Admin\PasarController;
use App\Http\Controllers\Admin\HargaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[PublicController::class, 'index']);
Route::get('laporan',[PublicController::class, 'laporan']);


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');
    Route::resource('komoditas', KomoditasController::class);
    Route::resource('pasar', PasarController::class);
    Route::resource('harga', HargaController::class);
});