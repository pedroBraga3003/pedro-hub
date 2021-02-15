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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/clientes','ClientesController@index')->name('clientes.index');
Route::get('/clientes/adicionar','ClientesController@adicionar')->name('clientes.adicionar');
Route::post('/clientes','ClientesController@salvar')->name('clientes.salvar');
Route::get('/clientes/visualizar/{grupo_clienteroteiro}','ClientesController@visualizar')->name('clientes.visualizar'); 
Route::get('/clientes/editar/{cliente}','ClientesController@editar')->name('clientes.editar'); 
Route::put('/clientes/{cliente}','ClientesController@atualizar')->name('clientes.atualizar'); 
Route::delete('/clientes/{cliente}','ClientesController@deletar')->name('clientes.deletar'); 
Route::get('/clientes/relatorio','ClientesController@relatorio')->name('clientes.relatorio');
