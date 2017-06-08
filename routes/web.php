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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//latihan controller
Route::get('/percobaan', 'PrakerinController@percobaan');
Route::get('/buah', 'PrakerinController@buah');
Route::get('/barang', 'PrakerinController@barang');
Route::get('/kendaraan', 'PrakerinController@kendaraan');
Route::get('/hobi', 'PrakerinController@hobi');
Route::get('halaman/{id}', 'PrakerinController@param');
Route::get('/{a}', 'PrakerinController@parameter');
