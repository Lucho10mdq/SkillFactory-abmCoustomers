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

Route::get('/','Abm@index');//el arroba llama al metodo del controlador abm
Route::get('/listado','Abm@mostrarTabla');
Route::post('/guardarCliente','Abm@guardarCliente');//sale a pegar al metodo guardar cliente
Route::get('/','Abm@index');
Route::get('/eliminar/{id}','Abm@eliminarPorId');
Route::get('/modificarCliente/{id}','Abm@FormModificar');
Route::post('/modCliente/{id}','Abm@modificarCliente');

