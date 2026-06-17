<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home1Controller;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DocumentationFileController;

Route::get('/documentation', [DocumentationFileController::class, 'index']);
Route::post('/documentation', [DocumentationFileController::class, 'store']);

Route::get('/donation/create', [DonationController::class, 'create']);
Route::post('/donation', [DonationController::class, 'store']);
// Mengatur routing untuk setiap halaman
Route::get('/', [HomeController::class, 'index']);
Route::get('/home1', [Home1Controller::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/donasi', [DonasiController::class, 'index']);
Route::resource('campaign', CampaignController::class);