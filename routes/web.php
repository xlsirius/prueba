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


Auth::routes();
//Servicios
Route::get('/home', 'HomeController@index')->name('home'); // listar
Route::get('/registar_servicios','HomeController@reg_servicios')->name('reg_servicios'); //form registro
Route::post('/proce_servicio','HomeController@proce_servicio')->name('proce_servicio'); //proceso registro
Route::get('/actualizar_servicios{id}', 'HomeController@editar_servicios')->name('editar_servicios'); // form editar
Route::put('proce_actu/{id}', 'HomeController@proce_actu_servicio')->name('proce_actu'); // proceso editar
