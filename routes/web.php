<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardGaleriController;
use App\Http\Controllers\DashboardPelayananController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\PelayananPemerintahController;
use App\Http\Controllers\AuthPemerintah;
use App\Http\Controllers\PemerintahPendaftaranController;
use App\Http\Controllers\UMKMPemerintahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Pelayanan
Route::controller(PelayananController::class)->group(function () {
    Route::get('pelayanan', 'index');
    Route::get('/', 'home');
    Route::get('cetak', 'cetak');
    Route::get('search', 'search');
});

// User Login & Registration
Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('signup', 'signup');
        Route::post('register', 'register');
        Route::get('signin', 'signin')->name('login');
        Route::post('authenticate', 'authenticate');
    });

    Route::get('signup/success', function () {
        return view('auth.signup_success', ['title' => 'Registrasi Berhasil']);
    })->name('signup-success');
});

//User Dashboard
Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
});

// Pemerintah
Route::group([
    'middleware' => 'pemerintah', 'prefix' => 'pemerintah'
], function () {
    Route::resource('umkm', UMKMPemerintahController::class)->except(['store', 'create']);
});

// Bansos

