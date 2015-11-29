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
Route::match(['get', 'post'],'registrasi', 'LoginController@registrasi');
Route::get('logout','LoginController@logout');
Route::match(['get', 'post'],'daftarbarupasien', 'LoginController@daftarbarupasien');

Route::get('main/regpasien', 'PuskesmasController@regpasien');
Route::post('main/makerujukan', 'PuskesmasController@makerujukan');
Route::post('main/verifpasien', 'PuskesmasController@verifpasien');

//Route::get('main/regpasien', function () {
//    return view('puskesmas/regpasien');	
//});
Route::get('main/rujukan', function () {
    return view('puskesmas/rujukan');	
});
Route::get('rumahsakit/home', function () {
    return view('rumahsakit/home');	
});
Route::match(['get', 'post'],'rumahsakit/daftarpasien', 'RumahsakitController@daftarpasien');
Route::match(['get', 'post'],'rumahsakit/daftarrujukan', 'RumahsakitController@daftarrujukan');
Route::match(['get', 'post'],'rumahsakit/rujukan/{aksi}/{id}', 'RumahsakitController@rujukan');
Route::match(['get', 'post'],'rumahsakit/registrasi', 'RumahsakitController@registrasi');
Route::match(['get', 'post'],'rumahsakit/daftarbarupasien', 'RumahsakitController@daftarbarupasien');
Route::match(['get', 'post'],'rumahsakit/verifpasien/{id}', 'RumahsakitController@verifpasien');


//Route::get('administrator', function () {
//    return view('main');	
//});
//Route::get('rumahsakit', function () {
//    return view('main');	
//});
Route::get('main/{folder}','AccountController@validasiUser');
Route::get('rumahsakit/{folder}','AccountController@validasiUser');


