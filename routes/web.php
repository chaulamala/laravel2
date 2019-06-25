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
    return view('templates.default');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/buku', 'BukuController@index')->name('buku');
Route::get('/buku/create', 'BukuController@ViewCreate')->name('buku.ViewCreate');
Route::get('/buku/edit', 'BukuController@edit')->name('buku.edit');

Route::get('/anggota', 'AnggotaController@index')->name('anggota');
Route::get('/anggota/create', 'AnggotaController@ViewCreate')->name('anggota.ViewCreate');
Route::get('/anggota/edit', 'AnggotaController@edit')->name('anggota.edit');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman');
Route::get('/peminjaman/create', 'PeminjamanController@ViewCreate')->name('peminjaman.ViewCreate');
Route::get('/peminjaman/edit', 'PeminjamanController@edit')->name('peminjaman.edit');

Route::get('/laporan', 'LaporanController@index')->name('laporan');
Route::get('/laporan/create', 'LaporanController@ViewCreate')->name('laporan.ViewCreate');
Route::get('/laporan/edit', 'LaporanController@edit')->name('laporan.edit');