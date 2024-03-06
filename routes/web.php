<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//route pelanggan
Route::get('/dashboard', [DashboardController::class, 'index']); 
Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'index']); 
Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa']); 
Route::post('/siswa', [SiswaController::class, 'siswa']); 

Route::get('/siswa/{siswa_id}',[SiswaController::class, 'show']); 
Route::get('/siswa/{siswa_id}/edit',[SiswaController::class, 'edit']);
Route::put('/siswa/{siswa_id}',[SiswaController::class, 'update']);
Route::delete('/siswa/{siswa_id}',[SiswaController::class, 'destroy']); 

Route::get('/pelanggan', [PelangganController::class, 'index']); 
Route::get('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan']);
Route::post('/pelanggan', [PelangganController::class, 'pelanggan']); 

Route::get('/pelanggan/{pelanggan_id}',[PelangganController::class, 'show']);
Route::get('/pelanggan/{pelanggan_id}/edit',[PelangganController::class, 'edit']);
Route::put('/pelanggan/{pelanggan_id}',[PelangganController::class, 'update']);
Route::delete('/pelanggan/{pelanggan_id}',[PelangganController::class, 'destroy']);

