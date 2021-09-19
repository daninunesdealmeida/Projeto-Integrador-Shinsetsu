<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});


Route::get('agendamentos', 'App\Http\Controllers\AgendamentosController@index');
Route::get('agendamentos/create', [App\Http\Controllers\AgendamentosController::class, 'create'])->name('agendamentos');
Route::post('agendamentos/store', [App\Http\Controllers\AgendamentosController::class, 'store'])->name('agendamentos');

Route::get('users', 'App\Http\Controllers\UsersController@index');

Route::get('pessoas', 'App\Http\Controllers\PessoasController@index');
Route::get('pessoas/create', [App\Http\Controllers\PessoasController::class, 'create'])->name('pessoas');
Route::post('pessoas/store', [App\Http\Controllers\PessoasController::class, 'store'])->name('pessoas');

Route::get('vendas', 'App\Http\Controllers\VendasController@index');
Route::get('vendas/create', [App\Http\Controllers\VendasController::class, 'create'])->name('vendas');
Route::post('vendas/store', [App\Http\Controllers\VendasController::class, 'store'])->name('vendas');


Route::get('venda_Itens', 'App\Http\Controllers\Venda_ItensController@index');
Route::get('venda_Itens/create', [App\Http\Controllers\Venda_ItensController::class, 'create'])->name('venda_Itens');
Route::post('venda_Itens/store', [App\Http\Controllers\Venda_ItensController::class, 'store'])->name('venda_Itens');

Route::get('produtos', 'App\Http\Controllers\ProdutosController@index');
Route::get('produtos/create', [App\Http\Controllers\ProdutosController::class, 'create'])->name('produtos');
Route::post('produtos/store', [App\Http\Controllers\ProdutosController::class, 'store'])->name('produtos');

Route::get('categorias', 'App\Http\Controllers\CategoriasController@index');
Route::get('categorias/create', [App\Http\Controllers\CategoriasController::class, 'create'])->name('categorias');
Route::post('categorias/store', [App\Http\Controllers\CategoriasController::class, 'store'])->name('categorias');


Route::get('pagamentos', 'App\Http\Controllers\PagamentosController@index');
Route::get('pagamentos/create', [App\Http\Controllers\PagamentosController::class, 'create'])->name('pagamentos');
Route::post('pagamentos/store', [App\Http\Controllers\PagamentosController::class, 'store'])->name('pagamentos');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
