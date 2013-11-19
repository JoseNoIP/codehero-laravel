<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('usuarios', array('uses' => 'UsuariosController@mostrarUsuarios'));
Route::get('usuarios/nuevo', array('uses' => 'UsuariosController@nuevoUsuario'));
Route::post('usuarios/crear', array('uses' => 'UsuariosController@crearUsuario')); //Ruta a la que apunta el formulario. Recibe peticiones 'POST'.
Route::get('usuarios/{id}', array('uses' => 'UsuariosController@verUsuario')); //Recibe parámetro 'id' para buscar usuario.
