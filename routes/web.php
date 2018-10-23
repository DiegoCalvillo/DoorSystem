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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('/', 'PrincipalController');

/*Rutas de ConfiguracionController*/
Route::resource('/configuracion', 'ConfiguracionController');

/*Rutas de FamiliaController*/
Route::resource('/familias', 'FamiliaController');
Route::get('familias/create', 'FamiliaController@create');
Route::post('familias/store', ['as' => 'familias/store', 'uses' => 'FamiliaController@store']);
Route::get('familias/{id}', ['as' => 'familias/show', 'uses' => 'FamiliaController@show']);
Route::get('familias/destroy/{id}', ['as' => 'familias/destroy', 'uses' => 'FamiliaController@destroy']);
Route::get('familias/{id}/edit', ['as' => 'familias/edit', 'uses' => 'FamiliaController@edit']);
Route::put('familias/update', ['as' => 'familias/update', 'uses' => 'FamiliaController@update']);

/*Rutas de SubFamiliaController*/
Route::get('sub_familia/create/{id}', ['as' => 'sub_familia/create', 'uses' => 'SubFamiliaController@create']);
Route::post('sub_familia/store', ['as' => 'sub_familia/store', 'uses' => 'SubFamiliaController@store']);
Route::get('sub_familia/{id}', ['as' => 'sub_familia/show', 'uses' => 'SubFamiliaController@show']);
Route::get('sub_familia/destroy/{id}', ['as' => 'sub_familia/destroy', 'uses' => 'SubFamiliaController@destroy']);
Route::get('sub_familia/{id}/edit', ['as' => 'sub_familia/edit', 'uses' => 'SubFamiliaController@edit']);
Route::put('sub_familia/update', ['as' => 'sub_familia/update', 'uses' => 'SubFamiliaController@update']);
Route::get('sub_familia_id/{id}', 'SubFamiliaController@getSubFamilias');

/*Rutas de ArticulosController*/
Route::resource('/articulos', 'ArticulosController');
Route::get('articulos/create', ['as' => 'articulos/create', 'uses' => 'ArticulosController@create']);
Route::post('articulos/store', ['as' => 'articulos/store', 'uses' => 'ArticulosController@store']);
Route::get('articulos/{id}', ['as' => 'articulos/show', 'uses' => 'ArticulosController@show']);
Route::get('articulos/{id}/edit', ['as' => 'articulos/edit', 'uses' => 'ArticulosController@edit']);
Route::put('articulos/update', ['as' => 'articulos/update', 'uses' => 'ArticulosController@update']);
Route::get('busqueda_articulos/articulos_familia/{id_familia}/articulos_subfamilia/{id_subfamilia}', 'ArticulosController@getArticulos');
Route::get('articulos_lista', ['as' => 'articulos_lista', 'uses' => 'ArticulosController@lista']);
Route::get('articulos/destroy/{id}', ['as' => 'articulos/destroy', 'uses' => 'ArticulosController@destroy']);

/*Rutas de UsuariosController*/
Route::resource('/usuarios', 'UsuariosController');
Route::get('usuarios/create', 'UsuariosController@create');
Route::post('usuarios/store', ['as' => 'usuarios/store', 'uses' => 'UsuariosController@store']);

/*Rutas de LoginController*/
Route::resource('/login', 'LoginController');
Route::post('login/store', ['as' => 'login/store', 'uses' => 'LoginController@store']);
Route::get('/logout', 'LoginController@logout');

Auth::routes();