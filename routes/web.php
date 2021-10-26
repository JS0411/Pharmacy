<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmaciasController;
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


Route::delete('/medicamentos/{id}', 'App\Http\Controllers\MedicamentosController@destroy')->name('medicamentos.destroy');
Route::put('/medicamentos/edit/{id}', 'App\Http\Controllers\MedicamentosController@update')->name('medicamentos.update');
Route::get('/medicamentos/edit/{id}', 'App\Http\Controllers\MedicamentosController@edit')->name('medicamentos.edit');
Route::post('/medicamentos/store', 'App\Http\Controllers\MedicamentosController@store')->name('medicamentos.store');
Route::get('/medicamentos/create', 'App\Http\Controllers\MedicamentosController@create')->name('medicamentos.create');

Route::delete('/laboratorios/{id}', 'App\Http\Controllers\LaboratoriosController@destroy')->name('laboratorios.destroy');
Route::put('/laboratorios/edit/{id}', 'App\Http\Controllers\LaboratoriosController@update')->name('laboratorios.update');
Route::get('/laboratorios/edit/{id}', 'App\Http\Controllers\LaboratoriosController@edit')->name('laboratorios.edit');
Route::post('/laboratorios/store', 'App\Http\Controllers\LaboratoriosController@store')->name('laboratorios.store');
Route::get('/laboratorios/create', 'App\Http\Controllers\LaboratoriosController@create')->name('laboratorios.create');


Route::delete('/farmacias/{id}', 'App\Http\Controllers\FarmaciasController@destroy')->name('farmacias.destroy');
Route::put('/farmacias/edit/{id}', 'App\Http\Controllers\FarmaciasController@update')->name('farmacias.update');
Route::get('/farmacias/edit/{id}', 'App\Http\Controllers\FarmaciasController@edit')->name('farmacias.edit');
Route::post('/farmacias/store', 'App\Http\Controllers\FarmaciasController@store')->name('farmacias.store');
Route::get('/farmacias/create', 'App\Http\Controllers\FarmaciasController@create')->name('farmacias.create');

Route::delete('/empleados/{id}', 'App\Http\Controllers\EmpleadosController@destroy')->name('empleados.destroy');
Route::put('/empleados/edit/{id}', 'App\Http\Controllers\EmpleadosController@update')->name('empleados.update');
Route::get('/empleados/edit/{id}', 'App\Http\Controllers\EmpleadosController@edit')->name('empleados.edit');
Route::post('/empleados/store', 'App\Http\Controllers\EmpleadosController@store')->name('empleados.store');
Route::get('/empleados/create', 'App\Http\Controllers\EmpleadosController@create')->name('empleados.create');
Route::get('/empleados/{id}', 'App\Http\Controllers\EmpleadosController@show')->name('empleados.show');
Route::get('/empleados', 'App\Http\Controllers\EmpleadosController@index')->name('empleados.index');
Route::get('/farmacias', 'App\Http\Controllers\FarmaciasController@index')->name('farmacias.index');
Route::get('/medicamentos', 'App\Http\Controllers\MedicamentosController@index')->name('medicamentos.index');
Route::get('/laboratorios', 'App\Http\Controllers\LaboratoriosController@index')->name('laboratorios.index');
