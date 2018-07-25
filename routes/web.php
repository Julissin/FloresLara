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

Route::get('/mi_primer_ruta', function(){
	return 'Hello Word, esta es mi primer ruta ;D';
});

Route::get('/nombre/{name}/apellido/{lastname?}', function($name, $lastname = 'Comun'){
	return 'Hola soy '.$name. ' '.$lastname;
});

Route::get('/nombre/{name}/apellido/{lastname}', function($name, $lastname){
	return 'Hola soy '.$name. ' '.$lastname;
});

Route::get('/name/{name}', function($name){
	return 'Hola soy '.$name;
});

Route::get('/prueba/{name}', 'PruebaControlador@prueba');

Route::resource('/flores','floresController');
Route::resource('/arreglos','arreglosController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
