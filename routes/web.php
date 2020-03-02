<?php

use App\Article;
use App\Http\Controllers\ArticlesController;

//En este archivo se almacenarán todos los comandos y órdenes para llamar a la ruta del archivo (controlador) que deberá ejecutarse

//HOME

//En primer lugar, la página principal mostrará únicamente "Home"
Route::get('/', function (){
    return view('inicio');
})->name('inicio');

//USUARIOS------------------------------------------

//Cuando por la url le pasemos el nombre "usuarios", nos ejecutará el método almacenado en "index" dentro del controlador
//El controlador se encargará de devolvernos la vista y ejecutar todas las funciones que necesita
Route::get('/usuarios', 'UserController@index')->name('users');

// Route::get('/usuarios/detalles', function (){
//     return 'Mostrando el detalle del usuario'.$_GET['id'];

// });

//NUEVO USUARIO--------------------------------------

//Para ejecutar esta orden deberemos pasar por GET el parámentro "usuarios/nuevo" para usar el método "create" creado y guardado en el controlador
Route::get('/usuarios/nuevo','UserController@create')->name('new_user');

//Mostrar usuarios

//declaramos una funcion anonima, y se llama cuando la ruta le llega por get
//Crearemos un parámetro nuevo "id", que se completará con el dato que le introduzcamos en la url por GET
Route::get('/usuarios/{id}', 'UserController@show')//La variable $id se autocompleta cuando se le pasa un parámetro por "GET"
//El filtro que le introduciremos indicará que solo aceptará un número
->where('id', '[0-9]+')->name('detalle_user');//Aquí se pueden añadir expresiones regulares (filtros) para que si no coincide, salte a la siguiente línea

//Saludo del usuario

//Cuando le pasemos de esta manera los parámetros "{name}" y "{nickname}" se autocompletarán con los datos introducidos por la url
//Estos datos se pasarán por GET
//Route::get('/saludo/{name}/{nickname?}', 'UserController@showNickname');

//Editar usuario

//declaramos una funcion anonima, y se llama cuando la ruta le llega por get
Route::get('/usuarios/{id}/edit', 'UserController@edit')//La variable $id se autocompleta cuando se le pasa un parámetro por "GET"
->where('id', '[0-9]+');//Aquí se pueden añadir expresiones regulares (filtros) para que si no coincide, salte a la siguiente línea

Route::get('/saludo/{name}/{nickname?}','WelcomeController');

Route::get('/pasteles', 'PastelController@index');

Route::get('/pasteles/{id}', 'PastelController@show')->where('id', '[0-9 ]+');

// ARTÍCULOS-------------------------------------------

//Indice
Route::get('/articulos', 'ArticlesController@index')->name('todos_articulos');

//Mostrar
Route::get('/articulos/{id}', 'ArticlesController@show')->where('id', '[0-9 ]+')->name('detalle_articulo');

//Crear Artículo con Formulario
Route::get('/articulos/crear', 'ArticlesController@crear')->name("articulo_nuevo");

//Enviar Formulario CREAR
Route::post('/articulos/store', 'ArticlesController@store');

//Formulario de edición de artículo
Route::get('/articulos/update/{id}', 'ArticlesController@update')->name('articulo_modificar');

//Enviar formulario de edición
Route::post('/articulos/update/{id}', 'ArticlesController@store_update');

//Eliminar artículo
Route::get('/articulos/delete/{id}', 'ArticlesController@delete')->name('articulo_eliminar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
