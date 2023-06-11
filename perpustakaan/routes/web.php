<?php

use App\Http\Controllers\PeminjamanBukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiAnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MemberController;


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
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});
Route::get('/form', function () {
    return view('tugas');
});

Route::get('/form-registrasi-anggota', [RegistrasiAnggotaController::class, 'index']);
Route::post('/hasil-regist', [RegistrasiAnggotaController::class, 'hasil']);

Route::get('/peminjaman-buku', [PeminjamanBukuController::class, 'index1']);
Route::post('/hasil-peminjaman', [PeminjamanBukuController::class, 'hasil1']);

//Praktikum 10
Route::get('/dashboard', [DashboardController::class, 'index']);

//Praktikum 11
Route::get('dashboard/buku', [BukuController::class, 'index']);
Route::get('dashboard/anggota', [MemberController::class, 'index']);

//Praktikum 12
Route::get('/dashboard/buku/create', [BukuController::class, 'create']);
Route::post('/dashboard/buku/store', [BukuController::class, 'store']);
Route::delete('/dashboard/buku/destroy/{id}', [BukuController::class, 'destroy']);

//Tugas 12
Route::get('dashboard/anggota/create', [MemberController::class, 'create']);
Route::post('dashboard/anggota/store', [MemberController::class, 'store']);
Route::delete('dashboard/anggota/destroy/{id}', [MemberController::class, 'destroy']);


