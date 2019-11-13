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
    return view('/layouts/app');
});

Route::get('/empleados/index', function () {
    return view('empleados/index');
})->name('empleados');

Route::get('/proyectos/index', function () {
    return view('proyectos/index');
})->name('proyectos');

Route::get('/departamentos/index', function () {
    return view('departamentos/index');
})->name('departamentos');
