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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/usuarios', 'usercontroller@index')->name('usuarios');

Route::get('/usuarios/crear-usuario', function () {
    return view('crear_user');
})->name('crear_user');

Route::post('/usuarios/crear-usuario/guardado','usercontroller@create')->name('guardar'); 






Route::get('/contacto', 'ContactoController@index')->name('contacto');

Route::get('/contacto/crear_contacto', function () {
    return view('crear_contacto');
})->name('crear_contacto');

Route::post('/contacto/guardado-form','ContactoController@create')->name('guardar_form'); 







Route::get('/estadisticas', 'ContactoController@estadisticas')->name('estadisticas');


Route::get('/noticias', 'NoticiasController@index')->name('noticias');