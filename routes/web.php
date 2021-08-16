<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CategoriaController;

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
    return view('contenido/contenido');
});

Route::get('/categoria','App\Http\Controllers\CategoriaController@index');
Route::post('/categoria/registrar','App\Http\Controllers\CategoriaController@store');
Route::put('/categoria/actualizar','App\Http\Controllers\CategoriaController@update');
Route::put('/categoria/activar','App\Http\Controllers\CategoriaController@activar');
Route::put('/categoria/desactivar','App\Http\Controllers\CategoriaController@desactivar');
Route::get('/categoria/selectCategoria','App\Http\Controllers\CategoriaController@selectCategoria');

Route::get('/articulo','App\Http\Controllers\ArticuloController@index');
Route::post('/articulo/registrar','App\Http\Controllers\ArticuloController@store');
Route::put('/articulo/actualizar','App\Http\Controllers\ArticuloController@update');
Route::put('/articulo/activar','App\Http\Controllers\ArticuloController@activar');
Route::put('/articulo/desactivar','App\Http\Controllers\ArticuloController@desactivar');

Route::get('/cliente','App\Http\Controllers\ClienteController@index');
Route::post('/cliente/registrar','App\Http\Controllers\ClienteController@store');
Route::put('/cliente/actualizar','App\Http\Controllers\ClienteController@update');

Route::get('/proveedor','App\Http\Controllers\ProveedorController@index');
Route::post('/proveedor/registrar','App\Http\Controllers\ProveedorController@store');
Route::put('/proveedor/actualizar','App\Http\Controllers\ProveedorController@update');

Route::get('/rol','App\Http\Controllers\RolController@index');