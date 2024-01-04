<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;

use App\Models\Layanan;
use App\Models\Reservasi;
use App\Models\Login;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/getReservasi', [ReservasiController::class, 'getReservasi']);

Route::post('/addReservasi', [ReservasiController::class, 'addReservasi']);

Route::get('/getLayanan', [LayananController::class, 'getLayanan']);

Route::post('/addLayanan', [LayananController::class, 'addLayanan']);

