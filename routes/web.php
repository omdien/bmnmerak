<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardRoomsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BMNsController;
use App\Http\Controllers\DashboardBMNsController;

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
    // return view('welcome');
    return view('home');
});

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/bmns/checkSlug', [DashboardBMNsController::class, 'show'])->middleware('auth');
Route::resource('/dashboard/bmns', DashboardBMNsController::class)->middleware('auth');
Route::resource('/dashboard/rooms', DashboardRoomsController::class)->middleware('auth');

// bmn dipindah ke gudang
Route::get('/dashboard/bmns/{bmn:id}/{room:id}/hapus', [DashboardBMNsController::class, 'pindah'])->middleware('auth');

// tambah bmn
Route::get('/dashboard/bmns/{room:id}/tambah', [DashboardBMNsController::class, 'tambah'])->middleware('auth');

// menambahkan bmn
Route::get('/dashboard/bmns/{bmn:id}/{room:id}', [DashboardBMNsController::class, 'nambah'])->middleware('auth');

//halaman scanning
Route::get('/room/{room:ru_kode}', [RoomsController::class, 'index']);

// menghapus ruangan
Route::get('/dashboard/rooms/{room:id}/hapus', [DashboardRoomsController::class, 'destroy'])->middleware('auth');

//halaman bmn
Route::get('/bmn/{bmn:br_id}', [BMNsController::class, 'index']);
