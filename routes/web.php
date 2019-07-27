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

Route::get('/usuarios', 'ControllerUsuarios@index')->name('usuarios.index');

Route::get('/usuarios/{user}', 'ControllerUsuarios@users')->name('dinamico')->where('user', '[0-9]+');

Route::get('/usuarios/{user}/{foranea_id}', 'ControllerUsuarios@ingreso')->name('dinamico.ingreso')->where('user', '[0-9]+');

Route::get('/usuarios/{user}/editar', 'ControllerUsuarios@editar')->name('editar.usuario');

Route::get('/usuarios/nuevo', 'ControllerUsuarios@nuevo')->name('crear.usuario');

Route::put('/usuarios/{user}', 'ControllerUsuarios@actualizar');

Route::post('/usuarios/nuevoUs', 'ControllerUsuarios@crear');

Route::delete('usuarios/{user}', 'ControllerUsuarios@eliminar')->name('eliminar.usuario');



Route::get('/contact', 'ControllerMensajes@contacto');

Route::post('/contact', 'ControllerMensajes@datos');