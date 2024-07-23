<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function (){
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('authenticate');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/', fn() => view('dashboard'))->name('dashboard');
//    PASIEN
    Route::get('/pasien', [\App\Http\Controllers\PasienController::class,'index'])->name('pasien.list');
    Route::get('/pasien/create', [\App\Http\Controllers\PasienController::class,'create'])->name('pasien.create');
    Route::post('/pasien/store', [\App\Http\Controllers\PasienController::class,'store'])->name('pasien.store');
    Route::get('/pasien/{pasien:id}/edit', [\App\Http\Controllers\PasienController::class,'edit'])->name('pasien.edit');
    Route::put('/pasien/{pasien:id}/update', [\App\Http\Controllers\PasienController::class,'update'])->name('pasien.update');
    Route::delete('/pasien/{pasien:id}', [\App\Http\Controllers\PasienController::class,'destroy'])->name('pasien.destroy');

// OBAT
    Route::get('/obat', [\App\Http\Controllers\ObatController::class, 'index'])->name('obat.list');
    Route::get('/obat/create', [\App\Http\Controllers\ObatController::class, 'create'])->name('obat.create');
    Route::post('/obat/store', [\App\Http\Controllers\ObatController::class, 'store'])->name('obat.store');
    Route::get('/obat/{obat:id}/edit', [\App\Http\Controllers\ObatController::class,'edit'])->name('obat.edit');
    Route::put('/obat/{obat:id}/update', [\App\Http\Controllers\ObatController::class,'update'])->name('obat.update');
    Route::delete('/obat/{obat:id}', [\App\Http\Controllers\ObatController::class,'destroy'])->name('obat.destroy');


    Route::middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function() {

        //    PEGAWAI
        Route::get('/pegawai', [\App\Http\Controllers\PegawaiController::class,'index'])->name('pegawai.list');
        Route::get('/pegawai/create', [\App\Http\Controllers\PegawaiController::class,'create'])->name('pegawai.create');
        Route::post('/pegawai/store', [\App\Http\Controllers\PegawaiController::class,'store'])->name('pegawai.store');
        Route::get('/pegawai/{pegawai:id}/edit', [\App\Http\Controllers\PegawaiController::class,'edit'])->name('pegawai.edit');
        Route::put('/pegawai/{pegawai:id}/update', [\App\Http\Controllers\PegawaiController::class,'update'])->name('pegawai.update');
        Route::delete('/pegawai/{pegawai:id}', [\App\Http\Controllers\PegawaiController::class,'destroy'])->name('pegawai.destroy');
    });


//    DOKTER
    Route::get('/dokter',[\App\Http\Controllers\DokterController::class,'index'])->name('dokter.list');
    Route::get('/dokter/create',[\App\Http\Controllers\DokterController::class,'create'])->name('dokter.create');
    Route::post('/dokter/store',[\App\Http\Controllers\DokterController::class,'store'])->name('dokter.store');
    Route::get('/dokter/{dokter:id}/edit',[\App\Http\Controllers\DokterController::class,'edit'])->name('dokter.edit');
    Route::put('/dokter/{dokter:id}/update',[\App\Http\Controllers\DokterController::class,'update'])->name('dokter.update');
    Route::delete('/dokter/{dokter:id}',[\App\Http\Controllers\DokterController::class,'destroy'])->name('dokter.destroy');

    //    KUNJUNGAN
    Route::get('/kunjugan', [\App\Http\Controllers\KunjunganController::class,'index'])->name('kunjungan.list');
    Route::get('/kunjugan/create', [\App\Http\Controllers\KunjunganController::class,'create'])->name('kunjungan.create');
    Route::post('/kunjugan/store', [\App\Http\Controllers\KunjunganController::class,'store'])->name('kunjungan.store');

    Route::get('/logout', [LoginController::class,'logout'])->name('logout');
});

