<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function() {
    Route::get('/', [RegistrasiController::class, 'index']);
    Route::post('/pendaftaran', [RegistrasiController::class, 'daftar']);
    Route::get('/regis_email', function(){
        return view('pages.regis_email');
    });

    // status
    Route::get('/status', [RegistrasiController::class, 'status']);
    Route::post('/status', [RegistrasiController::class, 'status_action']);
    Route::get('/status/{token}', [RegistrasiController::class, 'status_detail']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});


Route::middleware(['auth'])->group(function(){
    Route::get('/logout',[LoginController::class, 'logout']);

    // admin
    Route::get('/home', [AdminController::class, 'index']);
    Route::get('/accept/{kode}', [AdminController::class, 'accept']);
    Route::get('/denied/{kode}', [AdminController::class, 'denied']);
    Route::get('/reject/{kode}', [AdminController::class, 'reject']);
});
