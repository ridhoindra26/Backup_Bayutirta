<?php

use App\Http\Controllers\artikelController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UlasanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('loginPage');
});


Route::get('/dashboard', [dashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/reservasi', [ReservasiController::class,'reservasi'])->middleware('auth');
Route::get('/reservasi/{id}/{status}', [ReservasiController::class,'updateReservasi'])->middleware('auth');


Route::get('/ulasan', [UlasanController::class, 'ulasan'])->middleware('auth');

Route::get('/layanan', [LayananController::class,'layanan'])->middleware('auth');
Route::get('/layanan/info', [LayananController::class, 'infoLayanan'])->middleware('auth');
// Route::get('/layanan/deskripsi', [LayananController::class, 'descLayanan']);
// Route::get('/layanan/additional', [LayananController::class, 'additional']);
// Route::get('/layanan/review', [LayananController::class, 'review']);
// Route::get('/layanan/qna', [LayananController::class, 'qna']);
Route::post('/layanan/add', [LayananController::class, 'addLayanan'])->middleware('auth');
Route::get('/layanan/delete/{id}', [LayananController::class, 'deleteLayanan'])->middleware('auth');
Route::get('/layanan/{id}', [LayananController::class, 'layanandetail'])->middleware('auth');
Route::post('/layanan/editLayanan/{id}', [LayananController::class, 'edit'])->middleware('auth');


Route::get('/artikel', [artikelController::class, 'artikel'])->middleware('auth')->name('artikel');
Route::get('/artikel/add', [artikelController::class, 'editArtikel'])->middleware('auth');
Route::get('/artikel/{id}', [artikelController::class, 'articledetail'])->middleware('auth');
Route::post('/artikel/addArtikel', [artikelController::class, 'addArtikel'])->middleware('auth')->name('addArtikel');
Route::post('/artikel/editArtikel/{id}', [artikelController::class, 'edit'])->middleware('auth');
Route::get('/artikel/delete/{id}', [artikelController::class, 'deleteArtikel'])->middleware('auth')->name('deleteArtikel');

Route::get('/', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/', [LoginController::class, 'getLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');


// Route::get('/layanan', function () {
//     return view('layanan.layanan');
// });
