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
//mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');
Route::post('/mahasiswa/simpan', 'MahasiswaController@simpan');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::put('/mahasiswa/updated/{id}', 'MahasiswaController@updated');
Route::get('/mahasiswa/delete/{id}', 'MahasiswaController@delete');
//dosen
Route::get('/dosen', 'DosenController@index');
Route::get('/dosen/tambah', 'DosenController@tambah');
Route::post('/dosen/simpan', 'DosenController@simpan');
Route::get('/dosen/edit/{id}', 'DosenController@edit');
Route::put('/dosen/updated/{id}', 'DosenController@updated');
Route::get('/dosen/delete/{id}', 'DosenController@delete');
//otentifikasi
Route::get('/login', 'OtentifikasiController@index');
Route::post('/ceklogin', 'OtentifikasiController@ceklogin');
//home
Route::get('/home', 'HomeController@index');
//about
Route::get('/about', 'HomeController@about');
//home
Route::get('/contact', 'HomeController@contact');
//mencari data dosen
Route::get('/dosen/search','DosenController@search');
//mencari data mahasiswa
Route::get('/mahasiswa/search','MahasiswaController@search');