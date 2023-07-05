<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EvenetController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\DashboardAdminController;

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
// home
Route::resource('/', HomeController::class);
// Destinasi
Route::resource('/destinasi', DestinasiController::class);
// event
Route::resource('/event', EvenetController::class);

// informasi
Route::resource('/informasi', InformasiController::class);

// login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');



// admin

// dashboard
Route::resource('/dashboard', DashboardAdminController::class)->middleware('auth');
// profile
Route::resource('/profile', ProfileAdminController::class)-> middleware('auth');

// blog
Route::resource('/blog', BlogAdminController::class)->middleware('auth');


// logout
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');


