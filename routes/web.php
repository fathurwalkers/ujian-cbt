<?php

use Illuminate\Support\Facades\Route;


// Admin Dashboard Panel 
Route::prefix('/dashboard')->group(function () {
    Route::get('/', 'DashboardController@index')->middleware('status_login')->name('dashboard-index');

    // BANK SOAL 
    Route::get('/bank-soal', 'BanksoalController@banksoal')->name('bank-soal');
    Route::get('/tambah-bank-soal', 'BanksoalController@tambah_banksoal')->name('tambah-bank-soal');
    Route::post('/tambah-bank-soal', 'BanksoalController@post_tambah_banksoal')->name('post-tambah-bank-soal');

    // Master Assesor 
    Route::get('/master-assesor', 'DashboardController@master_assesor')->name('master-assesor');

    // Master Peserta 
    Route::get('/master-peserta', 'PesertaController@master_peserta')->name('master-peserta');
    Route::get('/tambah-peserta', 'PesertaController@tambah_peserta')->name('tambah-peserta');
    Route::post('/tambah-peserta', 'PesertaController@post_tambah_peserta')->name('post-tambah-peserta');
    Route::get('/detail-peserta/{idpeserta}', 'PesertaController@detail_peserta')->name('detail-peserta');

    // Master Nomor Ujian 
    Route::get('/master-nomor-ujian', 'DashboardController@master_nomorujian')->name('master-nomor-ujian');

    // Jadwal Ujian 
    Route::get('/jadwal-ujian', 'UjianController@index_jadwalujian')->name('jadwal-ujian');
    Route::get('/tambah-jadwal-ujian', 'UjianController@tambah_jadwalujian')->name('tambah-jadwal-ujian');
    Route::post('/tambah-jadwal-ujian', 'UjianController@posttambah_jadwalujian')->name('post-tambah-jadwalujian');
});

// Login & Logout Route 
Route::get('/login', 'DashboardController@login')->name('login-dashboard');
Route::post('/login', 'DashboardController@postlogin')->name('post-login-dashboard');
Route::get('/register', 'DashboardController@register')->name('register-dashboard');
Route::post('/register', 'DashboardController@postregister')->name('post-register-dashboard');
Route::post('/logout', 'DashboardController@logout_dashboard')->name('logout-dashboard');


// Route::prefix('/ujian')->group(function () {
//     Route::get('/test/{namaujian}/{nomorujian}', 'SoalController@index');
// });
