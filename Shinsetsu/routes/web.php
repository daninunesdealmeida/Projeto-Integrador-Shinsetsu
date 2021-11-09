<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

//Route::get('/', function () {
//    return view('welcome');
//
//});

Route::get('/', [WebController::class, 'index'])->name('site');
Route::get('/loja', [WebController::class, 'loja'])->name('loja');
Route::get('/categoria/{id}', [WebController::class, 'pesquisaCategoria'])->name('pesquisaCategoria');
Route::get('/login', [WebController::class, 'login'])->name('login');
Route::post("/store",       ['as' => 'agendamentos.store',   'uses' => "App\Http\Controllers\AgendamentosController@store"]);



Route::group(['middleware' => 'auth'], function () {
    // Rotas do model agendamentos
    Route::group(["prefix" => "agendamentos", "where" => ["id" => "[0-9]+"]], function () {
        Route::any("",              ['as' => 'agendamentos',         'uses' => "App\Http\Controllers\AgendamentosController@index"]);
        Route::get("/create",       ['as' => 'agendamentos.create',  'uses' => "App\Http\Controllers\AgendamentosController@create"]);
        Route::get("/{id}/destroy", ['as' => 'agendamentos.destroy', 'uses' => "App\Http\Controllers\AgendamentosController@destroy"]);
        Route::get("/{id}/edit",    ['as' => 'agendamentos.edit',    'uses' => "App\Http\Controllers\AgendamentosController@edit"]);
        Route::put("/{id}/update",  ['as' => 'agendamentos.update',  'uses' => "App\Http\Controllers\AgendamentosController@update"]);
    });



    Route::get('users', 'App\Http\Controllers\UsersController@index');



    // Rotas do model pessoas
    Route::group(["prefix" => "pessoas", "where" => ["id" => "[0-9]+"]], function () {
        Route::any("",              ['as' => 'pessoas',         'uses' => "App\Http\Controllers\PessoasController@index"]);
        Route::get("/create",       ['as' => 'pessoas.create',  'uses' => "App\Http\Controllers\PessoasController@create"]);
        Route::post("/store",       ['as' => 'pessoas.store',   'uses' => "App\Http\Controllers\PessoasController@store"]);
        Route::get("/{id}/destroy", ['as' => 'pessoas.destroy', 'uses' => "App\Http\Controllers\PessoasController@destroy"]);
        Route::get("/{id}/edit",    ['as' => 'pessoas.edit',    'uses' => "App\Http\Controllers\PessoasController@edit"]);
        Route::put("/{id}/update",  ['as' => 'pessoas.update',  'uses' => "App\Http\Controllers\PessoasController@update"]);
    });


    // Rotas do model vendas
    Route::group(["prefix" => "vendas", "where" => ["id" => "[0-9]+"]], function () {
        Route::any("",              ['as' => 'vendas',         'uses' => "App\Http\Controllers\VendasController@index"]);
        Route::get("/create",       ['as' => 'vendas.create',  'uses' => "App\Http\Controllers\VendasController@create"]);
        Route::post("/store",       ['as' => 'vendas.store',   'uses' => "App\Http\Controllers\VendasController@store"]);
        Route::get("/{id}/destroy", ['as' => 'vendas.destroy', 'uses' => "App\Http\Controllers\VendasController@destroy"]);
        Route::get("/{id}/edit",    ['as' => 'vendas.edit',    'uses' => "App\Http\Controllers\VendasController@edit"]);
        Route::put("/{id}/update",  ['as' => 'vendas.update',  'uses' => "App\Http\Controllers\VendasController@update"]);
    });

    //Rotas do model venda_Itens
    Route::group(["prefix" => "venda_Itens", "where" => ["id" => "[0-9]+"]], function () {
        Route::any("",              ['as' => 'venda_Itens',         'uses' => "App\Http\Controllers\Venda_ItensController@index"]);
        Route::get("/create",       ['as' => 'venda_Itens.create',  'uses' => "App\Http\Controllers\Venda_ItensController@create"]);
        Route::post("/store",       ['as' => 'venda_Itens.store',   'uses' => "App\Http\Controllers\Venda_ItensController@store"]);
        Route::get("/{id}/destroy", ['as' => 'venda_Itens.destroy', 'uses' => "App\Http\Controllers\Venda_ItensController@destroy"]);
        Route::get("/{id}/edit",    ['as' => 'venda_Itens.edit',    'uses' => "App\Http\Controllers\Venda_ItensController@edit"]);
        Route::put("/{id}/update",  ['as' => 'venda_Itens.update',  'uses' => "App\Http\Controllers\Venda_ItensController@update"]);
    });


    //Rotas do model produtos
    Route::group(["prefix" => "produtos", "where" => ["id" => "[0-9]+"]], function () {
        Route::any("",              ['as' => 'produtos',         'uses' => "App\Http\Controllers\ProdutosController@index"]);
        Route::get("/create",       ['as' => 'produtos.create',  'uses' => "App\Http\Controllers\ProdutosController@create"]);
        Route::post("/store",       ['as' => 'produtos.store',   'uses' => "App\Http\Controllers\ProdutosController@store"]);
        Route::get("/{id}/destroy", ['as' => 'produtos.destroy', 'uses' => "App\Http\Controllers\ProdutosController@destroy"]);
        Route::get("/{id}/edit",    ['as' => 'produtos.edit',    'uses' => "App\Http\Controllers\ProdutosController@edit"]);
        Route::put("/{id}/update",  ['as' => 'produtos.update',  'uses' => "App\Http\Controllers\ProdutosController@update"]);
    });


    //Rotas do model categorias
    Route::group(["prefix" => "categorias", "where" => ["id" => "[0-9]+"]], function () {
        Route::any("",              ['as' => 'categorias',         'uses' => "App\Http\Controllers\CategoriasController@index"]);
        Route::get("/create",       ['as' => 'categorias.create',  'uses' => "App\Http\Controllers\CategoriasController@create"]);
        Route::post("/store",       ['as' => 'categorias.store',   'uses' => "App\Http\Controllers\CategoriasController@store"]);
        Route::get("/{id}/destroy", ['as' => 'categorias.destroy', 'uses' => "App\Http\Controllers\CategoriasController@destroy"]);
        Route::get("/{id}/edit",    ['as' => 'categorias.edit',    'uses' => "App\Http\Controllers\CategoriasController@edit"]);
        Route::put("/{id}/update",  ['as' => 'categorias.update',  'uses' => "App\Http\Controllers\CategoriasController@update"]);
    });


    //Rotas do model pagamentos
    Route::group(["prefix" => "pagamentos", "where" => ["id" => "[0-9]+"]], function () {
        Route::any("",              ['as' => 'pagamentos',         'uses' => "App\Http\Controllers\PagamentosController@index"]);
        Route::get("/create",       ['as' => 'pagamentos.create',  'uses' => "App\Http\Controllers\PagamentosController@create"]);
        Route::post("/store",       ['as' => 'pagamentos.store',   'uses' => "App\Http\Controllers\PagamentosController@store"]);
        Route::get("/{id}/destroy", ['as' => 'pagamentos.destroy', 'uses' => "App\Http\Controllers\PagamentosController@destroy"]);
        Route::get("/{id}/edit",    ['as' => 'pagamentos.edit',    'uses' => "App\Http\Controllers\PagamentosController@edit"]);
        Route::put("/{id}/update",  ['as' => 'pagamentos.update',  'uses' => "App\Http\Controllers\PagamentosController@update"]);
    });



    //Rotas do model PDF
    Route::get("pdfAgendamentos",              ['as' => 'pdfAgendamentos',         'uses' => "App\Http\Controllers\PdfController@geraPdfAgendamentos"]);
    Route::get("pdfCategorias",              ['as' => 'pdfCategorias',         'uses' => "App\Http\Controllers\PdfController@geraPdfCategorias"]);
    Route::get("pdfPagamentos",              ['as' => 'pdfPagamentos',         'uses' => "App\Http\Controllers\PdfController@geraPdfPagamentos"]);
    Route::get("pdfPessoas",              ['as' => 'pdfPessoas',         'uses' => "App\Http\Controllers\PdfController@geraPdfPessoa"]);
    Route::get("pdfProdutos",              ['as' => 'pdfProdutos',         'uses' => "App\Http\Controllers\PdfController@geraPdfProdutos"]);
    Route::get("pdfUsers",              ['as' => 'pdfUsers',         'uses' => "App\Http\Controllers\PdfController@geraPdfUsers"]);
    Route::get("pdfVendaItens",              ['as' => 'pdfVendaItens',         'uses' => "App\Http\Controllers\PdfController@geraPdfVendaItens"]);
    Route::get("pdfVendas",              ['as' => 'pdfVendas',         'uses' => "App\Http\Controllers\PdfController@geraPdfVendas"]);
});

Auth::routes();
