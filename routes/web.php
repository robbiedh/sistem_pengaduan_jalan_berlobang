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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'GuestController@list_data');


//User
Route::post('simpan_pangaduan', 'UserController@simpan_pangaduan');
Route::get('/daftar_pengaduan', 'UserController@daftar_laporan');
Route::get('/development', 'UserController@development');


//wilayah provinsi 
Route::get('/provinsi', 'UserController@get_provinsi');
Route::get('/kota/{id}', 'UserController@get_kota');
Route::get('/kecamatan/{id}', 'UserController@get_kecamatan');
Route::get('/desa/{id}', 'UserController@get_desa');


//Login
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');



//testing 
Route::get('test_email', 'UserController@test');

// admin 
Route::get('admin/daftar_user/', 'AdminController@daftar_user');
Route::get('admin/daftar_laporan/', 'AdminController@index');
Route::get('admin/laporan/{id_laporan}', 'AdminController@laporan');

