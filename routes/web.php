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
/* 
Route::get('saludo/{nombre?}', function($nombre = "Bruce"){
	return "Saludos . $nombre, no tienes sobrenombre";
});

/*Route::get('home', function(){
	$nombre='Rosario';
	return view('home')->with('nombre',$nombre);
});*/

// App::setLocale('es'); cambiar el lenguaje de un proyecto


Route::view('/', 'home', ['nombre'=>'Rosario'])->name('home');

Route::view('acerca', 'acerca')->name('acerca');

Route::get('portafolio','ProjectController@index')->name("project.index");
Route::get('/portafolio/crear','ProjectController@create')->name('project.create');
Route::post('portafolio','ProjectController@store')->name("project.store");
Route::get('/portafolio/{project}','ProjectController@show')->name('project.show');

Route::view('contacto','contacto')->name("contacto");
Route::post('contacto','MessageController@store')->name("messages.store");