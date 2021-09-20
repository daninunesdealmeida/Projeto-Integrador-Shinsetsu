<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});


Route::get('agendamentos', 'App\Http\Controllers\AgendamentosController@index');
Route::get('agendamentos/create', [App\Http\Controllers\AgendamentosController::class, 'create'])->name('agendamentos');
Route::post('agendamentos/store', [App\Http\Controllers\AgendamentosController::class, 'store'])->name('agendamentos');
Route::get('agendamentos/{id}/destroy', 'App\Http\Controllers\AgendamentosController@destroy');
Route::get('agendamentos/{id}/edit', 'App\Http\Controllers\AgendamentosController@edit');
Route::put('agendamentos/{id}/update', 'App\Http\Controllers\AgendamentosController@update');

Route::get('users', 'App\Http\Controllers\UsersController@index');

Route::get('pessoas', 'App\Http\Controllers\PessoasController@index');
Route::get('pessoas/create', [App\Http\Controllers\PessoasController::class, 'create'])->name('pessoas');
Route::post('pessoas/store', [App\Http\Controllers\PessoasController::class, 'store'])->name('pessoas');
Route::get('pessoas/{id}/destroy', 'App\Http\Controllers\PessoasController@destroy');
Route::get('pessoas/{id}/edit', 'App\Http\Controllers\PessoasController@edit');
Route::put('pessoas/{id}/update', 'App\Http\Controllers\PessoasController@update');

Route::get('vendas', 'App\Http\Controllers\VendasController@index');
Route::get('vendas/create', [App\Http\Controllers\VendasController::class, 'create'])->name('vendas');
Route::post('vendas/store', [App\Http\Controllers\VendasController::class, 'store'])->name('vendas');
Route::get('vendas/{id}/destroy', 'App\Http\Controllers\VendasController@destroy');
Route::get('vendas/{id}/edit', 'App\Http\Controllers\VendasController@edit');
Route::put('vendas/{id}/update', 'App\Http\Controllers\VendasController@update');

Route::get('venda_Itens', 'App\Http\Controllers\Venda_ItensController@index');
Route::get('venda_Itens/create', [App\Http\Controllers\Venda_ItensController::class, 'create'])->name('venda_Itens');
Route::post('venda_Itens/store', [App\Http\Controllers\Venda_ItensController::class, 'store'])->name('venda_Itens');
Route::get('venda_Itens/{id}/destroy', 'App\Http\Controllers\Venda_ItensController@destroy');
Route::get('venda_Itens/{id}/edit', 'App\Http\Controllers\Venda_ItensController@edit');
Route::put('venda_Itens/{id}/update', 'App\Http\Controllers\Venda_ItensController@update');

Route::get('produtos', 'App\Http\Controllers\ProdutosController@index');
Route::get('produtos/create', [App\Http\Controllers\ProdutosController::class, 'create'])->name('produtos');
Route::post('produtos/store', [App\Http\Controllers\ProdutosController::class, 'store'])->name('produtos');
Route::get('produtos/{id}/destroy', 'App\Http\Controllers\ProdutosController@destroy');
Route::get('produtos/{id}/edit', 'App\Http\Controllers\ProdutosController@edit');
Route::put('produtos/{id}/update', 'App\Http\Controllers\ProdutosController@update');

Route::get('categorias', 'App\Http\Controllers\CategoriasController@index');
Route::get('categorias/create', [App\Http\Controllers\CategoriasController::class, 'create'])->name('categorias');
Route::post('categorias/store', [App\Http\Controllers\CategoriasController::class, 'store'])->name('categorias');
Route::get('categorias/{id}/destroy', 'App\Http\Controllers\CategoriasController@destroy');
Route::get('categorias/{id}/edit', 'App\Http\Controllers\CategoriasController@edit');
Route::put('categorias/{id}/update', 'App\Http\Controllers\CategoriasController@update');


Route::get('pagamentos', 'App\Http\Controllers\PagamentosController@index');
Route::get('pagamentos/create', [App\Http\Controllers\PagamentosController::class, 'create'])->name('pagamentos');
Route::post('pagamentos/store', [App\Http\Controllers\PagamentosController::class, 'store'])->name('pagamentos');
Route::get('pagamentos/{id}/destroy', 'App\Http\Controllers\PagamentosController@destroy');
Route::get('pagamentos/{id}/edit', 'App\Http\Controllers\PagamentosController@edit');
Route::put('pagamentos/{id}/update', 'App\Http\Controllers\PagamentosController@update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
