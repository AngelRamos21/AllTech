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

//Home
route::get('/index' , 'HomeController@index');
route::get('/recuperarContraseña' , 'HomeController@recContra');
//Usuarios
route::post('/perfil' , 'HomeController@index');
route::get('/perfil' , 'UsuarioController@mostrarPerfil')->middleware('auth');
route::get('/editarPerfil' , 'UsuarioController@showEditarPerfil')->middleware('auth');
route::post('/editarPerfil' , 'UsuarioController@editar');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//posteos
Route::post('/post', 'PostController@posteo');
Route::get('/eliminarPost/{id}', 'PostController@eliminar');
Route::post('/editarPost', 'PostController@editar');
