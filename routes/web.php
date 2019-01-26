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

//RUTAS DEL AUTH
Route::get('login', 'Auth\LoginController@formLogin')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
