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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados/pasantes', 'App\Http\Controllers\PasantesController@index')->name('pasantes.index');
Route::get('/farmacias', 'App\Http\Controllers\FarmaciasController@index')->name('farmacias.index');
Route::get('/medicamentos', 'App\Http\Controllers\MedicamentosController@index')->name('medicamentos.index');
