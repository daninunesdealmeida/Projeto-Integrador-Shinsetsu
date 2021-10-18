<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(Request $filter)
    {
        $search = $filter->get('filtragem');
        if ($search == null) {
            $categorias = Categoria::orderBy('nome')->paginate(10);
        } else {
            $categorias = Categoria::where('id_categorias', 'ilike', '%' . $search . '%')->orderBy('nome')->paginate(10);
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
        Categoria::find($id_categorias)->delete();

        return redirect()->route('categorias');
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
