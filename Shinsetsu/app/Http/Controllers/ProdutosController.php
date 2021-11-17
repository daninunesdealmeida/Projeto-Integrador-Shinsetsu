<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $filter)
    {
        $search = $filter->get('desc_filtro');
        if ($search == null) {
            $produtos = Produto::orderBy('nome')->paginate(10);
        } else {
            $produtos = Produto::where('nome', 'like', '%' . $search . '%')->orderBy('nome')->paginate(10);
        }

        return view("produtos.index", ["produtos" => $produtos]);
    }


    public function create()
    {
        $categorias = Categoria::select(['id_categorias', 'nome'])->orderBy('nome')->get();
        return view('produtos.create', compact('categorias', $categorias));
    }

    public function store(ProdutoRequest $request)
    {
        $novo_produto = $request->all();
        //dd($request->hasFile('imagem') && $request->file('imagem')->isValid());              
        //upload da imagem
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('img/produtos'), $imagemNome);
            $novo_produto['imagem'] = $imagemNome;
        }


        Produto::create($novo_produto);
        return redirect()->route('produtos');
    }

    public function destroy($id_produtos)
    {
        /* Produto::find($id_produtos)->delete();
        return redirect()->route('produtos');*/
        try {
            Produto::find($id_produtos)->delete();
            $ret = array('status' => 200, 'msg' => "null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
    }

    public function edit($id_produtos)
    {
        /*$produtos = Produto::find($id_produtos);
        return view('produtos.edit', compact('produtos'));*/

        $produtos = Produto::find($id_produtos);
        $categorias = Categoria::select(['id_categorias', 'nome'])->orderBy('nome')->get();
        //dd($produtos);        
        return view('produtos.edit', ['produtos' => $produtos, 'categorias' => $categorias]);
    }

    public function update(ProdutoRequest $request, $id_produtos)
    {
        $produto = Produto::find($id_produtos);

        //dd($request);
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('img/produtos'), $imagemNome);
            $produto->update(['imagem' => $imagemNome]);
            $atributos = $request->except(['imagem']);

            if (!empty($imagemNome)) {
                $atributos['imagem'] = $imagemNome;
            }
        }
        $produto->update($atributos);
        //dd($produto);      
        //$produto->update($request->all()); 
        //$produto->update(['nome' => $request->nome]);
        //$produto->update(['especificacao' => $request->especificacao]);
        //$produto->update(['preco' => $request->preco]);
        //$produto->update(['qt_estoque' => $request->qt_estoque]);
        //$produto->update(['estoque_minimo' => $request->estoque_minimo]);
        //$produto->update(['fk_categoria' => $request->fk_categoria]);
        //dd($produto);    
        return redirect()->route('produtos');
    }
}
