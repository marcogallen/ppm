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

Route::get('/', 'MainPageController@index');

Route::get('/perros-perdidos', 'PerrosPerdidosController@index');
Route::get('/perros-perdidos/{id}', 'PerrosPerdidosController@detalle');


Route::get('/perros-encontrados', 'PerrosEncontradosController@index');
Route::get('/perros-encontrados/{id}', 'PerrosEncontradosController@detalle');


//Route::get('/perros-en-adopcion', 'PerrosAdopcionController@index');

//Route::resource('/perros-perdidos','PerrosPerdidosController');

Route::get('/subir-perdido',['middleware' => ['saveToS','auth'], 'uses' => 'PerrosPerdidosController@subir']);
Route::get('/subir-encontrado',['middleware' => ['saveToS','auth'], 'uses' => 'PerrosEncontradosController@subir']);

//Route::get('/subir-en-adopcion','PerrosAdopcionController@subir');

Route::get('/yolovi-perdido/{id}', ['middleware' => 'auth', 'uses' =>'PerrosPerdidosController@yolovi']);

Route::get('/esmio-encontrado/{id}', ['middleware' => 'auth', 'uses' =>'PerrosEncontradosController@esmio']);


Route::get('/nosotros','SatellitePagesController@nosotros');
Route::get('/servicios','SatellitePagesController@servicios');
Route::get('/contacto','SatellitePagesController@contacto');



Route::post('/subir-perdido','PerrosPerdidosController@guardar');
Route::post('/subir-encontrado','PerrosEncontradosController@guardar');
//Route::post('/subir-en-adopcion','PerrosAdopcionController@subir');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
	]);
//Route::post('auth/register/{one?}/{two?}/{three?}/{four?}/{five?}',['middleware'=>'register','uses'=>'Auth\AuthController@postRegister']);
