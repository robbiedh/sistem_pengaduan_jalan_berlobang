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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', 'GuestController@home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/berita', 'GuestController@home');

Route::get('/berita/{id}', 'GuestController@home');

Route::get('/', function () {
    return view('welcome');
});


//User
Route::post('simpan_pangaduan', 'UserController@simpan_pangaduan');
Route::get('/daftar_pengaduan', 'UserController@daftar_laporan');


//wilayah provinsi 
Route::get('/provinsi', 'UserController@get_provinsi');
Route::get('/kota/{id}', 'UserController@get_kota');
Route::get('/kecamatan/{id}', 'UserController@get_kecamatan');
Route::get('/desa/{id}', 'UserController@get_desa');
