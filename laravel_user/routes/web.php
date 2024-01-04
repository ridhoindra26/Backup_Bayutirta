<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/servicedetail/{id}', [ServiceController::class, 'serviceDetail']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/articledetail/{id}', [ArticleController::class, 'articleDetail']);

Route::post('/reservasi', [Controller::class, 'addReservasi']);
