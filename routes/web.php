<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'panitia'], function () {
    Route::get('/dashboard', 'Event\ViewController@index');
    Route::get('/peserta', 'Event\ViewController@showPeserta');
    Route::get('/detailpeserta', 'Event\ViewController@detailPeserta');
    Route::get('/jadwal', 'Event\ViewController@showJadwal');
    Route::get('/hasilpertandingan', 'Event\ViewController@hasilPertandingan');
    Route::get('/login', 'Event\ViewController@loginPanitia');
});

Route::group(['prefix' => 'peminjaman'], function () {
    Route::get('', 'Peminjaman\ViewController@index');
    Route::get('/about_us', 'Peminjaman\ViewController@aboutUs');
    
});

Route::group(['prefix' => 'anggota'], function () {
    Route::get('', 'anggota\ViewController@login');
    Route::get('/dashboard', 'anggota\ViewController@dashboard');
    Route::get('/daftar_pemain', 'anggota\ViewController@daftarPemain');
    Route::get('/data_kegiatan', 'anggota\ViewController@dataKegiatan');
});
