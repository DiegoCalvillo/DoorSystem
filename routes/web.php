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

/*Rutas de SubFamiliaController*/
Route::get('sub_familia/create/{id}', ['as' => 'sub_familia/create', 'uses' => 'SubFamiliaController@create']);
Route::post('sub_familia/store', ['as' => 'sub_familia/store', 'uses' => 'SubFamiliaController@store']);
Route::get('sub_familia/{id}', ['as' => 'sub_familia/show', 'uses' => 'SubFamiliaController@show']);
Route::get('sub_familia/destroy/{id}', ['as' => 'sub_familia/destroy', 'uses' => 'SubFamiliaController@destroy']);