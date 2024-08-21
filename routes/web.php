<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rutas de prueba
Route::get('/', function () {
    return '<h1>Hola mundo con Laravel</h1>';
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/pruebas/{nombre?}', function ($nombre = null) {
    $texto = '<h2>Texto desde una ruta</h2>';
    $texto .= 'Nombre: '.$nombre;
    return view('pruebas', array(
        'texto' => $texto
    ));
});

Route::get('/animales', 'App\Http\Controllers\PruebasController@index');
Route::get('/test-orm', 'App\Http\Controllers\PruebasController@testOrm');

// Rutas del API


    /* Metodos HTTP comunes
    *
    * GET: Conseguir datos o recursos
    * POST: Guardar datos o recursos o hacer lógica desde un formulario
    * PUT: Actualizar recursos o datos
    * DELETE: Eliminar datos o recursos
    */

    //Rutas de pruebas
    Route::get('/usuario/pruebas', 'App\Http\Controllers\UserController@pruebas');
    Route::get('/categoria/pruebas', 'App\Http\Controllers\CategoryController@pruebas');
    Route::get('/entrada/pruebas', 'App\Http\Controllers\PostController@pruebas');

    // Rutas del controlador de usuarios
    Route::post('/api/register', 'App\Http\Controllers\UserController@register');
    Route::post('/api/login', 'App\Http\Controllers\UserController@login');