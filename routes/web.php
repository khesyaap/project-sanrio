<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SanrioController;

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

// route halaman pertama/welcome
Route::get('/', [HomeController::class, 'index']);

// untuk menampilkan data
Route::get('/sanrios', [SanrioController::class, 'index']);

// untuk menampilkan data yang dipilih
Route::get('/sanrio/{id}', [SanrioController::class, 'show']);

// mengarahkan menampilkan tampilan create
Route::get('/sanrio/data/create', [SanrioController::class, 'create']);

// untuk menyimpan data ke db
Route::post('/sanrio', [SanrioController::class, 'store']);

// untuk menampilkan view form data edit
Route::get('/sanrio/{id}/edit', [SanrioController::class, 'edit']);

// mengupdate data ke db
Route::put('/sanrio/{id}', [ SanrioController::class, 'update']);

// mendelete data
Route::delete('/sanrio/{id}', [SanrioController::class, 'destroy']);