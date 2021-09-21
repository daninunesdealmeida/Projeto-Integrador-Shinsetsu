<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::All();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request)
    {
        $novo_produto = $request->all();
        Produto::create($novo_produto);

        return redirect('produtos');
    }

    public function destroy($id_produtos)
    {
        Produto::find($id_produtos)->delete();

        return redirect('produtos');
    }

    public function edit($id_produtos)
    {
        $produtos = Produto::find($id_produtos);
        return view('produtos.edit', compact('produtos'));
    }

    public function update(ProdutoRequest $request, $id_produtos)
    {
        $produto = Produto::find($id_produtos)->update($request->all());

        return redirect('produtos');
    }
}
