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
    Route::get('peserta', function () {
        return view('admin/peserta');
    });
    Route::get('detailpeserta', function () {
        return view('admin/detailpeserta');
    });
});

Route::group(['prefix' => 'peminjaman'], function () {
    Route::get('', 'Peminjaman\ViewController@index');
    Route::get('/about_us', 'Peminjaman\ViewController@aboutUs');
});

