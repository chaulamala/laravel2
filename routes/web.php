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

Auth::routes();


Route::group(['prefix' => '/admin'], function (){
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('/buku', 'BukuController@index')->name('buku');
    Route::get('/buku/create', 'BukuController@create')->name('buku.create');
    Route::post('/buku/create', 'BukuController@store')->name('buku.store');
    Route::get('/buku/edit/{id}', 'BukuController@edit')->name('buku.edit');
    Route::patch('/buku/edit/{id}', 'BukuController@update')->name('buku.update');
    Route::get('/buku/destroy/{id}', 'BukuController@destroy')->name('buku.destroy');

    Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman');
    Route::get('/peminjaman/create', 'PeminjamanController@create')->name('peminjaman.create');
    Route::post('/peminjaman/create', 'PeminjamanController@store')->name('peminjaman.store');
    Route::get('/peminjaman/edit/{id}', 'PeminjamanController@edit')->name('peminjaman.edit');
    Route::patch('/peminjaman/edit/{id}', 'PeminjamanController@update')->name('peminjaman.update');
    Route::get('/peminjaman/destroy/{id}', 'PeminjamanController@destroy')->name('peminjaman.destroy');

    Route::get('/kategori', 'KategoriController@index')->name('kategori');
    Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');
    Route::post('/kategori/create', 'KategoriController@store')->name('kategori.store');
    Route::get('/kategori/edit/{id}', 'KategoriController@edit')->name('kategori.edit');
    Route::patch('/kategori/edit/{id}', 'KategoriController@update')->name('kategori.update');
    Route::get('/kategori/destroy/{id}', 'KategoriController@destroy')->name('kategori.destroy');

});

Route::get('/', 'FrontEndController@index')->name('index');
Route::get('/pinjam/{id}', 'FrontEndController@pinjam')->name('pinjam');
Route::post('/pinjam/store', 'FrontEndController@store')->name('pinjam.store');