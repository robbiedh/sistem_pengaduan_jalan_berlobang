<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login','Api\Usercontroller@login');
Route::post('register','Api\Usercontroller@register');


Route::group(['middleware' => 'auth:api'], function(){
	Route::get('data_laporan','Api\Usercontroller@get_data');
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
