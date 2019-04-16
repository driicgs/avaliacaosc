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
    return view('index');
});

Route::get('/medicos', 'ControladorMedico@index');
Route::get('/medicos/novo', 'ControladorMedico@create');
Route::get('/medicos/editar/{id}', 'ControladorMedico@edit');
Route::post('/medicos/{id}', 'ControladorMedico@update');
Route::get('/medicos/apagar/{id}', 'ControladorMedico@destroy');
Route::post('/medicos', 'ControladorMedico@store');

Route::get('/especialidades', 'ControladorEspecialidades@index');
Route::post('/especialidades', 'ControladorEspecialidades@store');
Route::get('/especialidades/editar/{id}', 'ControladorEspecialidades@edit');
Route::post('/especialidades/{id}', 'ControladorEspecialidades@update');
Route::get('/especialidades/novo', 'ControladorEspecialidades@create');
Route::get('/especialidades/apagar/{id}', 'ControladorEspecialidades@destroy');

Route::get('/especialidademedico', 'ControladorEspecialidadeMedico@index');