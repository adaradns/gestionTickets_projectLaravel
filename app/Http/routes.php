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
	Route::resource('sla','SlaController');
	//Route::get('/sla', 'SlaController@create');
	Route::get('/', 'UsersController@index');
});

Route::group(['middleware' => ['auth', 'cliente'], 'prefix' => 'cliente' ] , function(){
	
	Route::resource('ticket', 'TicketController');
	Route::get('/', 'TicketController@index');
	
	Route::resource('encuesta','EncuestaController');
	/*Route::get('/', function(){
		return view('cliente.index-cliente');
	});*/
});

Route::group(['middleware' => ['auth', 'empleado'], 'prefix' => 'empleado' ] , function(){

	Route::resource('empleado', 'EmpleadoController');
	Route::get('/', 'EmpleadoController@index');
	Route::get('/indexCreado', 'EmpleadoController@indexCreado');
	Route::get('/indexFinalizado', 'EmpleadoController@indexFinalizado');
	Route::get('/descripcionAutoasignar/{id}', 'EmpleadoController@descripcionAutoasignar');
	Route::get('/autoasignar/{id}', 'TicketController@autoasignarTicket');
	Route::get('/finalizar/{id}', 'TicketController@finalizarTicket');
	
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



Route::group(['prefix' => 'encuesta'], function(){

	Route::resource('encuestas', 'EncuestaController');

});