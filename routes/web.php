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

Route::resource('proyectos', 'ProyectoController')->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
]);

Route::resource('empleados', 'EmpleadoController')->only([
    'index', 'show', 'create', 'store', 'delete'
]);
Route::resource('departamentos', 'DepartamentoController')->only([
    'index', 'show', 'create', 'store', 'delete'
]);