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
   return view('website/index');
});
Route::get('/ingresar',function(){
 return view('website/ingresar');
});
Route::get('/registro',function(){
	return view('website/nuevous');
});
Route::post('/controller','logincontroller@store');
Route::post('/logeo','logincontroller@logearse');
Route::group(['middleware'=>'admin'],function(){
		Route::get('/administrador/panel',function(){
			return view('administrador/panel');
		});	 
		Route::get('/logout','logincontroller@salir');
		Route::get('/registromascota','mascota@index');
		Route::post('/registromascotas','mascota@store');
		Route::get('/detalledemascota/{id}', 'mascota@show');
	});
