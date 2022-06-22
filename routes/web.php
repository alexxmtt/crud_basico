<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cadastros/novo', 'CadastroController@create');
Route::post('/cadastros/novo', 'CadastroController@store')->name('registrar_produto');
Route::get('/cadastro/ver/{id}', 'CadastroController@show');
Route::get('/cadastro/editar/{id}', 'CadastroController@edit');
Route::post('/cadastro/editar/{id}', 'CadastroController@update')->name('alterar_cadastro');
Route::get('/cadastro/excluir/{id}', 'CadastroController@delete');
Route::get('/cadastro/excluir/{id}', 'CadastroController@destroy')->name('excluir_cadastro');
