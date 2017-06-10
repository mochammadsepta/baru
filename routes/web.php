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

Route::get('nola', 'LatihanController@percobaan');
Route::get('satu', 'LatihanController@satu');
Route::get('dua', 'LatihanController@dua');
Route::get('tiga', 'LatihanController@tiga');
Route::get('empat', 'LatihanController@empat');
Route::get('lima', 'LatihanController@lima');

// Route::get('/{id}', 'LatihanController@coba');
Route::get('/test', 'DataController@test2');
Route::get('/test3/{nama}', 'DataController@test3');
// Route::get('/test/{id}', 'DataController@test2');