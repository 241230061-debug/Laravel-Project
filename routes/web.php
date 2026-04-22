<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home1Controller;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;

// Mengatur routing untuk setiap halaman
Route::get('/', [HomeController::class, 'index']);
Route::get('/home1', [Home1Controller::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);