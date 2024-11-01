<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;


// Redirect '/' ke halaman login
Route::get('/', function () {
    return redirect()->route('backend.login');
});

// Route untuk beranda dengan middleware auth
Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])
    ->name('backend.beranda')
    ->middleware('auth');

// Route untuk halaman login
Route::get('backend/login', [LoginController::class, 'loginBackend'])
    ->name('backend.login');

// Route untuk autentikasi login
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])
    ->name('backend.login');

// Route untuk logout
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])
    ->name('backend.logout');

    Route::get('/login', function () {
        return view('backend.v_login.login'); // Mengarahkan ke views/backend/v_login/login.blade.php
    })->name('login');
