<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JenisPaketController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PaketController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// authentication
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', [AuthController::class, "login"])->name("login");

    Route::get('/daftar', [AuthController::class, "daftar"])->name("daftar");
});


// booking paket
Route::controller(JenisPaketController::class)->group(function () {
    Route::get('/paket/{paket_booking}', [JenisPaketController::class, "index"])->name("booking");

    Route::get('/paket/{paket_booking}/{jenis_paket}', [JenisPaketController::class, "jenisPaket"])->name("paket");
});


// get S & K dan Jadwal dari setiap booking dan paketnya -> using AJAX
Route::controller(SessionController::class)->group(function () {
    Route::post('/get-content', [SessionController::class, 'getContent'])->name('get-content');
});


// Route::controller(SessionController::class)->group(function () {
//     Route::post('/get-content/{paket_booking}/{jenis_paket}/{get_content}', [SessionController::class, 'getContent'])->name('get-content');
// });


// get content paket wisuda - bronze
// Route::post('/paket/wisuda_family/bronze/get-content', [SessionController::class, 'getContent'])->name('get-content');

// form jadwal booking
