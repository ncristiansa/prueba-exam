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

Route::get("/", "ArtistaController@index");
Route::get("/nuevoArtista", "ArtistaController@nuevoArtista");
Route::post("/", "ArtistaController@guardarArtista");

Route::get("/modificarArtista/{id}", "ArtistaController@modificarArtista");
Route::post("/modificarArtista/{id}", "ArtistaController@datosActualizados");
