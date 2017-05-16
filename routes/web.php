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
    return view('welcome',['nombre'=>null,'apellido'=>'Tapia']);
});


/*
* Ruta usando controlador
*/
Route::get('/hola/{nombre}', "HolaController@hola");


/*
* Ruta estática
*/
Route::get('/hola', function () {
    return 'Hola!';
});

/*Ruta dinámica

Route::get('/hola/{nombre}', function ($nombre) {
    return "Hola {$nombre}!";
});

*/


