<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\artikelController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth');
Route::get('/error', [LoginController::class, 'error']);

Route::get('/getReservasi', [ReservasiController::class, 'getReservasi']);

Route::post('/addReservasi', [ReservasiController::class, 'addReservasi']);

Route::get('/getLayanan', [LayananController::class, 'getLayanan']);

Route::post('/addLayanan', [LayananController::class, 'addLayanan']);

Route::post('/artikel/addArtikel', [artikelController::class, 'addArtikel']);

Route::post('/login', [LoginController::class, 'getLogin']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/addAdmin', [LoginController::class, 'addUser']);
