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
Route::post('customers.store','ClienteController@store');
Route::get('customers.create','ClienteController@create');
Route::DELETE('customers.destroy/{id}','ClienteController@destroy');
Route::get('customers.edit/{id}','ClienteController@edit');
Route::post('customers.update/{id}','ClienteController@update');



