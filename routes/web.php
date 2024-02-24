<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
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

Route::get('/pelanggan', [PelangganController::class, 'index']); 
Route::get('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan']);
Route::post('/pelanggan', [PelangganController::class, 'pelanggan']); 

Route::get('/pelanggan/{pelanggan_id}',[PelangganController::class, 'show']); //untuk menampilkan data berdasarkan id tertentu
Route::get('/pelanggan/{pelanggan_id}/edit',[PelangganController::class, 'edit']);
Route::put('/pelanggan/{pelanggan_id}',[PelangganController::class, 'update']);
Route::delete('/pelanggan/{pelanggan_id}',[PelangganController::class, 'destroy']); //untuk mengupdate data berdasarkan id tertentu