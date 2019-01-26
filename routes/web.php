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
  return Redirect('/login');
});

//Home
route::get('/recuperarContraseña' , 'HomeController@recContra');
Route::get('/inicio', 'HomeController@mostrarInicio');
//Usuarios

Route::get('/perfil', 'UsuarioController@mostrarPerfil')->name('home');
route::get('/editarPerfil' , 'UsuarioController@showEditarPerfil')->middleware('auth');
route::post('/editarPerfil' , 'UsuarioController@editar');


//posteos
Route::post('/post', 'PostController@posteo');
Route::post('/eliminarPost', 'PostController@eliminar');
Route::get('/listarPost', 'PostController@listarPosteos');
Route::post('/editarPost', 'PostController@editar');

Auth::routes();
