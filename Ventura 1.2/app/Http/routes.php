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

//Route::get('/', function () { return view('welcome');});
Route::get('/inicio',["uses"=>"InicioVentura@index","as"=>'Home']);
Route::get('/bienvenidos',["uses"=>"bienvenidoscontroller@index", "middlware"=>"auth"]);
Route::resource('/Contacto','Contacto@index');
Route::get('/logout','bienvenidoscontroller@index');
Route::resource('/reglas','reglascontroller@index');
Route::get('/juego','bienvenidoscontroller@create');
Route::auth();

Route::get('/home', 'HomeController@index');