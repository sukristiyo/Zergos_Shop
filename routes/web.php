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

Auth::routes();

//Home 
Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['auth']], function () {
    // Home admin
    Route::get('/Administrator', 'AdminController@index')->name('home');
    // Tambah data
    Route::post('/Administrator/tambah', 'AdminController@store')->name('tambah-data');
    //  hapus data
    Route::get('/Administrator/hapus/{id}', 'AdminController@destroy')->name('hapus-data');
    // Redirect Data
    Route::get('/Administrator/edit/{id}', 'AdminController@edit')->name('edit-data');
    // Cari Data
    Route::post('/Administrator/cari', 'AdminController@index')->name('cari-data');
    // Edit Data
    Route::post('/Administrator/update', 'AdminController@update')->name('update-data');

    //Data Penjualan
    Route::get('/Administrator/pemesanan', 'AdminController@pemesanan')->name('data-pemesanan');
});
