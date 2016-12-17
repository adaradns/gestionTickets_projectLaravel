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

Route::group(['middleware' => ['auth', 'administrador'], 'prefix' => 'admin' ] , function(){

	Route::resource('users','UsersController');
	Route::resource('sla','SlaController');
	Route::get('/', 'UsersController@index');
});

Route::group(['middleware' => ['auth', 'cliente'], 'prefix' => 'cliente' ] , function(){

	Route::resource('mensajes','MensajesController');
	Route::resource('ticket', 'TicketController');
	Route::get('/', 'TicketController@index');
	
	Route::resource('encuesta','EncuestaController');
	/*Route::get('historial/{id}','HistorialController@show');
	Route::get('/', function(){
		return view('cliente.index-cliente');
	});*/
});

Route::group(['middleware' => ['auth', 'empleado'], 'prefix' => 'empleado' ] , function(){

	Route::resource('mensajes','MensajesController');
	Route::resource('empleado', 'EmpleadoController');
	Route::get('/', 'EmpleadoController@index');
	Route::get('/indexCreado', 'EmpleadoController@indexCreado');
	Route::get('/indexFinalizado', 'EmpleadoController@indexFinalizado');
	Route::get('/descripcionAutoasignar/{id}', 'EmpleadoController@descripcionAutoasignar');
	Route::get('/bandejaEntrada/{id}', 'TicketController@redirigirBandejaEntrada');
	Route::get('/autoasignar/{id}', 'TicketController@autoasignarTicket');
	Route::get('/finalizar/{id}', 'TicketController@finalizarTicket');
	/*
	Route::get('descripcionAutoasignar/historial/{id}','HistorialController@show');
	Route::get('historial/{id}','HistorialController@show');
	*/
	Route::resource('historial', 'HistorialController');
	
});

Route::group(['middleware' => ['auth', 'analista'], 'prefix' => 'analista' ] , function(){
	
		Route::resource('analista', 'ChartController');
		Route::get('/', 'ChartController@index');
	
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});



Route::group(['prefix' => 'encuesta'], function(){

	Route::resource('encuestas', 'EncuestaController');

});