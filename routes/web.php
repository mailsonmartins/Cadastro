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

Route::get('/produtos', 'ControladorProduto@index');
Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/categorias/cadastrar', 'ControladorCategoria@create');
Route::post('/categorias', 'ControladorCategoria@store');
Route::get('/categorias/deletar/{id}', 'ControladorCategoria@destroy');
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::post('/categorias/{id}', 'ControladorCategoria@update');
Route::get('/page_editar_categoria', 'ControladorCategoria@pageEditar');
Route::get('/page_deletar_categoria', 'ControladorCategoria@pageDeletar');

