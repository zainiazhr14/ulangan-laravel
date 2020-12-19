<?php

use Illuminate\Support\Facades\Route;

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

// Routing Barang
Route::get('/barang', 'BarangController@index');
// tambah
Route::get('/barang/tambah', 'BarangController@tambah')->name('barang.tambah');
Route::post('/barang/store', 'BarangController@store')->name('barang.store');
// hapus
Route::get('/barang/hapus/{id}', 'BarangController@hapus')->name('barang.hapus');
// edit
Route::get('/barang/edit/{id}', 'BarangController@edit')->name('barang.edit');
Route::post('/barang/update/{id}', 'BarangController@update')->name('barang.update');
