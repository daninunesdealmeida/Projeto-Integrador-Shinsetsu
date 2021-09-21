<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

// Rotas do model agendamentos
Route::group(["prefix" => "agendamentos", "where" => ["id" => "[0-9]+"]], function () {
    Route::get("",              ['as' => 'agendamentos',         'uses' => "App\Http\Controllers\AgendamentosController@index"]);
    Route::get("/create",       ['as' => 'agendamentos.create',  'uses' => "App\Http\Controllers\AgendamentosController@create"]);
    Route::post("/store",       ['as' => 'agendamentos.store',   'uses' => "App\Http\Controllers\AgendamentosController@store"]);
    Route::get("/{id}/destroy", ['as' => 'agendamentos.destroy', 'uses' => "App\Http\Controllers\AgendamentosController@destroy"]);
    Route::get("/{id}/edit",    ['as' => 'agendamentos.edit',    'uses' => "App\Http\Controllers\AgendamentosController@edit"]);
    Route::put("/{id}/update",  ['as' => 'agendamentos.update',  'uses' => "App\Http\Controllers\AgendamentosController@update"]);
});



Route::get('users', 'App\Http\Controllers\UsersController@index');



// Rotas do model pessoas
Route::group(["prefix" => "pessoas", "where" => ["id" => "[0-9]+"]], function () {
    Route::get("",              ['as' => 'pessoas',         'uses' => "App\Http\Controllers\PessoasController@index"]);
    Route::get("/create",       ['as' => 'pessoas.create',  'uses' => "App\Http\Controllers\PessoasController@create"]);
    Route::post("/store",       ['as' => 'pessoas.store',   'uses' => "App\Http\Controllers\PessoasController@store"]);
    Route::get("/{id}/destroy", ['as' => 'pessoas.destroy', 'uses' => "App\Http\Controllers\PessoasController@destroy"]);
    Route::get("/{id}/edit",    ['as' => 'pessoas.edit',    'uses' => "App\Http\Controllers\PessoasController@edit"]);
    Route::put("/{id}/update",  ['as' => 'pessoas.update',  'uses' => "App\Http\Controllers\PessoasController@update"]);
});


// Route::get('vendas', 'App\Http\Controllers\VendasController@index');
// Route::get('vendas/create', [App\Http\Controllers\VendasController::class, 'create'])->name('vendas');
// Route::post('vendas/store', [App\Http\Controllers\VendasController::class, 'store'])->name('vendas');
// Route::get('vendas/{id}/destroy', 'App\Http\Controllers\VendasController@destroy');
// Route::get('vendas/{id}/edit', 'App\Http\Controllers\VendasController@edit');
// Route::put('vendas/{id}/update', 'App\Http\Controllers\VendasController@update');



// Rotas do model vendas
Route::group(["prefix" => "vendas", "where" => ["id" => "[0-9]+"]], function () {
    Route::get("",              ['as' => 'vendas',         'uses' => "App\Http\Controllers\VendasController@index"]);
    Route::get("/create",       ['as' => 'vendas.create',  'uses' => "App\Http\Controllers\VendasController@create"]);
    Route::post("/store",       ['as' => 'vendas.store',   'uses' => "App\Http\Controllers\VendasController@store"]);
    Route::get("/{id}/destroy", ['as' => 'vendas.destroy', 'uses' => "App\Http\Controllers\VendasController@destroy"]);
    Route::get("/{id}/edit",    ['as' => 'vendas.edit',    'uses' => "App\Http\Controllers\VendasController@edit"]);
    Route::put("/{id}/update",  ['as' => 'vendas.update',  'uses' => "App\Http\Controllers\VendasController@update"]);
});



Route::get('venda_Itens', 'App\Http\Controllers\Venda_ItensController@index');
Route::get('venda_Itens/create', [App\Http\Controllers\Venda_ItensController::class, 'create'])->name('venda_Itens');
Route::post('venda_Itens/store', [App\Http\Controllers\Venda_ItensController::class, 'store'])->name('venda_Itens');
Route::get('venda_Itens/{id}/destroy', 'App\Http\Controllers\Venda_ItensController@destroy');
Route::get('venda_Itens/{id}/edit', 'App\Http\Controllers\Venda_ItensController@edit');
Route::put('venda_Itens/{id}/update', 'App\Http\Controllers\Venda_ItensController@update');



//Rotas do model produtos
Route::group(["prefix" => "produtos", "where" => ["id" => "[0-9]+"]], function () {
    Route::get("",              ['as' => 'produtos',         'uses' => "App\Http\Controllers\ProdutosController@index"]);
    Route::get("/create",       ['as' => 'produtos.create',  'uses' => "App\Http\Controllers\ProdutosController@create"]);
    Route::post("/store",       ['as' => 'produtos.store',   'uses' => "App\Http\Controllers\ProdutosController@store"]);
    Route::get("/{id}/destroy", ['as' => 'produtos.destroy', 'uses' => "App\Http\Controllers\ProdutosController@destroy"]);
    Route::get("/{id}/edit",    ['as' => 'produtos.edit',    'uses' => "App\Http\Controllers\ProdutosController@edit"]);
    Route::put("/{id}/update",  ['as' => 'produtos.update',  'uses' => "App\Http\Controllers\ProdutosController@update"]);
});



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
