<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('agendamentos', 'App\Http\Controllers\AgendamentosController@index');
Route::get('users', 'App\Http\Controllers\UsersController@index');
Route::get('pessoas', 'App\Http\Controllers\PessoasController@index');
Route::get('vendas', 'App\Http\Controllers\VendasController@index');
Route::get('venda_Itens', 'App\Http\Controllers\Venda_ItensController@index');
Route::get('produtos', 'App\Http\Controllers\ProdutosController@index');
Route::get('categorias', 'App\Http\Controllers\CategoriasController@index');
Route::get('pagamentos', 'App\Http\Controllers\PagamentosController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
