<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContentController;

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

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

// authentication
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', [AuthController::class, "login"])->name("login");

    Route::get('/daftar', [AuthController::class, "register"])->name("daftar");
});

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/paket', function () {
    return view('paket', ['title' => 'Paket']);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});


// booking paket
Route::controller(BookingController::class)->group(function () {
    Route::get('/paket/{paket_booking}', [BookingController::class, "index"])->name("booking");

    Route::get('/paket/{paket_booking}/{jenis_paket}', [BookingController::class, "jenisPaket"])->name("paket");

    // Booking Confirm
    Route::get("/paket/{paket_booking}/{jenis_paket?}/confirm", [BookingController::class, "confirm"])->name("confirm");
});


// get S & K dan Jadwal dari setiap booking dan paketnya -> using AJAX
Route::controller(ContentController::class)->group(function () {
    Route::post('/get-content', [ContentController::class, 'getContent'])->name('get-content');
});


// Route::controller(SessionController::class)->group(function () {
//     Route::post('/get-content/{paket_booking}/{jenis_paket}/{get_content}', [SessionController::class, 'getContent'])->name('get-content');
// });


// get content paket wisuda - bronze
// Route::post('/paket/wisuda_family/bronze/get-content', [SessionController::class, 'getContent'])->name('get-content');

// form jadwal booking
