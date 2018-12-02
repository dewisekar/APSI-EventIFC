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


Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', function () {
        return view('admin/admindashboard');
    })->name('adminhome');
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