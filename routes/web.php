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
Route::resource('customers','ClienteController');
Route::get('/','ClienteController@index');
Route::get('/alljson','ClienteController@jsonA');


Route::get('/idjson/{id}','ClienteController@jsonPorId');