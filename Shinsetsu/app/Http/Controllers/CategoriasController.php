<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(Request $filter)
    {
        $search = $filter->get('desc_filtro');
        if ($search == null) {
            $categorias = Categoria::orderBy('nome')->paginate(10);
        } else {
            $categorias = Categoria::where('nome', 'like', '%' . $search . '%')->orderBy('nome')->paginate(10);
        }
        return view("categorias.index", ["categorias" => $categorias]);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(CategoriaRequest $request)
    {
        $nova_categoria = $request->all();
        Categoria::create($nova_categoria);

        return redirect()->route('categorias');
    }


    public function destroy($id_categorias)
    {
        /*Categoria::find($id_categorias)->delete();
        return redirect()->route('categorias');*/

        try {
            Categoria::find($id_categorias)->delete();
            $ret = array('status' => 200, 'msg' => "null");
          } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
          } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
          }
          return $ret;
    }

    public function edit($id_categorias)
    {
        $categorias = Categoria::find($id_categorias);
        return view('categorias.edit', compact('categorias'));
    }

    public function update(CategoriaRequest $request, $id_categorias)
    {
        Categoria::find($id_categorias)->update($request->all());

        return redirect()->route('categorias');
    }
}
