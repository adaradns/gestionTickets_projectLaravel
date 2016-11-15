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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::group(['middleware' => ['auth', 'administrador'], 'prefix' => 'admin' ] , function(){
	
	//Route::resource('users', 'UsersController@create');
	Route::resource('admin/', 'UsersController@create');
//		return view('admin.createuser');

});*/
Route::group(['middleware' => ['auth', 'administrador'], 'prefix' => 'admin' ] , function(){

	Route::resource('users','UsersController');

	Route::get('/', 'UsersController@index');
});

Route::group(['middleware' => ['auth', 'cliente'], 'prefix' => 'cliente' ] , function(){
	
	Route::resource('ticket', 'TicketController');
	Route::get('/', 'TicketController@index');
	/*Route::get('/', function(){
		return view('cliente.index-cliente');
	});*/
});

Route::group(['middleware' => ['auth', 'empleado'], 'prefix' => 'empleado' ] , function(){
	Route::get('/', function(){
		return view('empleado.index-empleado');
	});
});

Route::group(['middleware' => ['auth', 'analista'], 'prefix' => 'analista' ] , function(){
	Route::get('/', function(){
		return view('analista.index-analista');
	});
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
	