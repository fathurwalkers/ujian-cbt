<?php

use Illuminate\Support\Facades\Route;


// Admin Dashboard Panel 
Route::prefix('/dashboard')->group(function () {
    Route::get('/', 'DashboardController@index')->middleware('status_login')->name('dashboard-index');

    // BANK SOAL 
    Route::get('/bank-soal', 'BanksoalController@banksoal')->middleware('status_login')->name('bank-soal');
    Route::get('/tambah-bank-soal', 'BanksoalController@tambah_banksoal')->middleware('status_login')->name('tambah-bank-soal');
    Route::post('/tambah-bank-soal', 'BanksoalController@post_tambah_banksoal')->middleware('status_login')->name('post-tambah-bank-soal');
    Route::get('/detail-bank-soal/{idsoal}', 'BanksoalController@detail_banksoal')->middleware('status_login')->name('detail-bank-soal');

    // Master Assesor 
    Route::get('/master-assesor', 'AssesorController@master_assesor')->middleware('status_login')->name('master-assesor');
    Route::get('/tambah-assesor', 'AssesorController@tambah_assesor')->middleware('status_login')->name('tambah-assesor');
    Route::post('/post-tambah-assesor', 'AssesorController@posttambah_assesor')->middleware('status_login')->name('post-tambah-assesor');
    Route::get('/edit-assesor/{idassesor}', 'AssesorController@edit_assesor')->middleware('status_login')->name('edit-assesor');
    Route::post('/update-assesor/{idassesor}', 'AssesorController@update_assesor')->middleware('status_login')->name('update-assesor');
    Route::get('/delete-assesor/{idassesor}', 'AssesorController@delete_assesor')->middleware('status_login')->name('delete-assesor');

    // Master Peserta 
    Route::get('/master-peserta', 'PesertaController@master_peserta')->middleware('status_login')->name('master-peserta');
    Route::get('/tambah-peserta', 'PesertaController@tambah_peserta')->middleware('status_login')->name('tambah-peserta');
    Route::post('/tambah-peserta', 'PesertaController@post_tambah_peserta')->middleware('status_login')->name('post-tambah-peserta');
    Route::get('/detail-peserta/{idpeserta}', 'PesertaController@detail_peserta')->middleware('status_login')->name('detail-peserta');
    Route::get('/edit-peserta/{idpeserta}', 'PesertaController@edit_peserta')->middleware('status_login')->name('edit-peserta');
    Route::post('/update-peserta/{idpeserta}', 'PesertaController@update_peserta')->middleware('status_login')->name('update-peserta');
    Route::post('/delete-peserta/{idpeserta}', 'PesertaController@delete_peserta')->middleware('status_login')->name('delete-peserta');

    // Master Nomor Ujian 
    Route::get('/master-nomor-ujian', 'UjianController@master_nomorujian')->middleware('status_login')->name('master-nomor-ujian');
    Route::get('/tambah-nomor-ujian', 'UjianController@tambah_nomorujian')->middleware('status_login')->name('tambah-nomor-ujian');
    Route::post('/post-nomor-ujian', 'UjianController@post_nomorujian')->middleware('status_login')->name('post-nomor-ujian');
    Route::get('/edit-nomor-ujian/{idnomorujian}', 'UjianController@edit_nomorujian')->middleware('status_login')->name('edit-nomor-ujian');
    Route::post('/update-nomor-ujian/{idnomorujian}', 'UjianController@update_nomorujian')->middleware('status_login')->name('update-nomor-ujian');
    Route::get('/delete-nomor-ujian/{idnomorujian}', 'UjianController@delete_nomorujian')->middleware('status_login')->name('delete-nomor-ujian');

    // Jadwal Ujian 
    Route::get('/jadwal-ujian', 'UjianController@index_jadwalujian')->middleware('status_login')->name('jadwal-ujian');
    Route::get('/tambah-jadwal-ujian', 'UjianController@tambah_jadwalujian')->middleware('status_login')->name('tambah-jadwal-ujian');
    Route::post('/tambah-jadwal-ujian', 'UjianController@posttambah_jadwalujian')->middleware('status_login')->name('post-tambah-jadwalujian');

    // LAPORAN UJIAN 
    Route::get('/laporan-ujian', 'UjianController@laporanujian')->name('laporan-ujian');

    // RELASI NOMORUJIAN DAN PESERTA 
    Route::get('/relasi-nomorujian-peserta', 'UjianController@relasi_nomorujian_peserta')->name('relasi-nomorujian-peserta');
    Route::get('/delete-peserta-ujian/{idpesertaujian}', 'UjianController@delete_nomorujian_peserta')->name('delete-peserta-ujian');
});

// Login & Logout Route 
Route::get('/login', 'DashboardController@login')->name('login-dashboard');
Route::post('/login', 'DashboardController@postlogin')->name('post-login-dashboard');
Route::get('/register', 'DashboardController@register')->name('register-dashboard');
Route::post('/register', 'DashboardController@postregister')->name('post-register-dashboard');
Route::post('/logout', 'DashboardController@logout_dashboard')->name('logout-dashboard');

// Proses Ujian 
Route::get('/', 'UjianController@index_prosesujian')->name('index-proses-ujian');
Route::post('/', 'UjianController@postindex_prosesujian')->name('post-index-proses-ujian');
Route::get('/persiapan/{peserta_id}', 'UjianController@persiapan_prosesujian')->name('persiapan-proses-ujian');
Route::get('/ajax-timestamp', 'UjianController@ajax_timestamp')->name('ajax-timestamp');
Route::get('/ajax-datestamp', 'UjianController@ajax_datestamp')->name('ajax-datestamp');

// Soal 
Route::get('/soal', 'UjianController@soal_index')->name('soal-index');
