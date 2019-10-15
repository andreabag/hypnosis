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
Route::resource('Product', 'ProductController');
Route::get('/', function () {
    return view('welcome');
});

Route::get("/inicio", function(){
  return "hola";
});

Route::get("/agregarRegistro", function(){
return view("agregarRegistro");
});
Route::post('/agregarRegistro', 'registracionController@agregarRegistro');
Route::post('/borrarRegistro', 'registracionController@borrarRegistro');
Route::get("/actualizarRegistro", function(){
return view("actualizarRegistro");
});
Route::post('/actualizarRegistro', 'registracionController@actualizarRegistro');
