<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KKController;

// Route to dashboard
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route to display data KK

Route::get('/dta_kk', [KKController::class, 'dtaKK']);
Route::get('/tmbh_kk', [KKController::class, 'tmbhKK'])->name('tmbh_kk');
Route::post('/ins_kk', [KKController::class, 'InsKK'])->name('kk.insKartuKeluarga');


// Route to display data penduduk
Route::get('/dta_pdd', [PendudukController::class, 'dtaPenduduk'])->name('penduduk.dtaPenduduk');
Route::get('/tmbh_pdd', [PendudukController::class, 'tmbhPenduduk'])->name('penduduk.tmbhPenduduk');
Route::post('/ins_pdd', [PendudukController::class, 'insPenduduk'])->name('penduduk.insPenduduk');

Route::get('/edit_pdd/{NIK}', [PendudukController::class, 'editPenduduk']);
Route::post('/update_pdd/{NIK}', [PendudukController::class, 'updatePenduduk']);
Route::get('/del_pdd/{NIK}', [PendudukController::class, 'deletePenduduk']);