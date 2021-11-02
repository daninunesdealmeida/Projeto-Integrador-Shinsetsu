<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $filter)
    {
        $search = $filter->get('filtragem');
        if ($search == null) {
            $produtos = Produto::orderBy('nome')->paginate(10);
        } else {
            $produtos = Produto::where('id_produtos', 'ilike', '%' . $search . '%')->orderBy('nome')->paginate(10);
        }
        return view("produtos.index", ["produtos" => $produtos]);
    }


    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request)
    {
        $novo_produto = $request->all();
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
        $produtos = Produto::find($id_produtos);
        return view('produtos.edit', compact('produtos'));
    }

    public function update(ProdutoRequest $request, $id_produtos)
    {
        $produto = Produto::find($id_produtos)->update($request->all());

        return redirect()->route('produtos');
    }
}
