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
    return view('login');
});
Route::get('/jabatan','JabatanController@index')->name('jabatan');
Route::get('/jabatan/create','JabatanController@create')->name('jabatan/create');
Route::post('/jabatan/store','JabatanController@store')->name('jabatan/store');
Route::get('/jabatan/edit/{kode_jabatan}','JabatanController@edit')->name('jabatan/edit');
Route::post('/jabatan/update/{kode_jabatan}','JabatanController@update')->name('jabatan/update');
Route::get('/jabatan/destroy/{kode_jabatan}','JabatanController@destroy')->name('jabatan/destroy');

Route::get('/golongan','GolonganController@index')->name('golongan');
Route::get('/golongan/create','GolonganController@create')->name('golongan/create');
Route::post('/golongan/store','GolonganController@store')->name('golongan/store');
Route::get('/golongan/edit/{kode_golongan}','GolonganController@edit')->name('golongan/edit');
Route::post('/golongan/update/{kode_golongan}','GolonganController@update')->name('golongan/update');
Route::get('/golongan/destroy/{kode_jabatan}','GolonganController@destroy')->name('golongan/destroy');

Route::get('/pegawai','PegawaiController@index')->name('pegawai');
Route::get('/pegawai/create','PegawaiController@create')->name('pegawai/create');
Route::post('/pegawai/store','PegawaiController@store')->name('pegawai/store');
Route::get('/pegawai/edit/{nip}','PegawaiController@edit')->name('pegawai/edit');
Route::post('/pegawai/update/{nip}','PegawaiController@update')->name('pegawai/update');
Route::get('/pegawai/destroy/{nip}','PegawaiController@destroy')->name('pegawai/destroy');

Route::get('/penggajian','PenggajianController@index')->name('penggajian');
Route::get('/penggajian/create','PenggajianController@create')->name('penggajian/create');
Route::get('/cari/penggajian','PenggajianController@cari')->name('penggajian/cari');
Route::post('/penggajian/store','PenggajianController@store')->name('penggajian/store');
Route::get('/penggajian/destroy/{id}','PenggajianController@destroy')->name('penggajian/destroy');


// Route::post('/simpan_transaksi','PenggajianController@simpan_transaksi')->name('simpan_transaksi');
// Route::get('/simpan_transaksi/struk','PenjualanController@simpan_transaksi')->name('simpan_transaksi/struk');
// Route::get('/penggajian/struk','PenggajianController@struk')->name('penggajian/struk');

Route::get('/laporan','LaporanController@index')->name('laporan');
Route::get('/laporan/cetak','LaporanController@cetak')->name('laporan/cetak');

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
 
});

