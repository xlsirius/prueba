<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'GuestController@index'); // listar
Route::get('/perfil/{id}', 'GuestController@perfil')->name('perfil'); // perfil del usuario
Route::get('/servicio/{id}', 'GuestController@servicio')->name('servicio'); // perfil del usuario


Auth::routes();
//Servicios
Route::get('/home', 'HomeController@index')->name('home'); // listar
Route::post('/registar_comentario/{id}','HomeController@reg_comentario')->name('reg_comentario'); //proce comentario
Route::get('/registar_servicios','HomeController@reg_servicios')->name('reg_servicios'); //form registro
Route::post('/proce_servicio','HomeController@proce_servicio')->name('proce_servicio'); //proceso registro
Route::get('/actualizar_servicios/{id}', 'HomeController@editar_servicios')->name('editar_servicios'); // form editar
Route::put('proce_actu/{id}', 'HomeController@proce_actu_servicio')->name('proce_actu'); // proceso editar
Route::delete('proce_eliminar/{id}', 'HomeController@proce_eliminar_servicio')->name('eliminar_reg'); // proceso editar
Route::post('adquirir/{id}', 'HomeController@adquirir')->name('adquirir'); // proceso adquirir
