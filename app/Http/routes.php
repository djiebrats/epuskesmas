<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('login');
});
Route::post('login', 'LoginController@dologin');
Route::post('main/verifpasien', 'PuskesmasController@verifpasien');
Route::get('logout','LoginController@logout');
Route::get('main/regpasien', 'PuskesmasController@regpasien');


//Route::get('main/regpasien', function () {
//    return view('puskesmas/regpasien');	
//});
Route::get('main/rujukan', function () {
    return view('puskesmas/rujukan');	
});
//Route::get('administrator', function () {
//    return view('main');	
//});
//Route::get('rumahsakit', function () {
//    return view('main');	
//});
Route::get('main/{folder}','AccountController@validasiUser');


