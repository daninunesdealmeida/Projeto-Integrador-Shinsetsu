<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index(){
        $categorias = Categoria::All();
        return view('categorias.index', ['categorias'=>$categorias]);
}

public function create(){
    return view('categorias.create');
}

public function store(CategoriaRequest $request){
    $nova_categoria = $request->all();
    Categoria::create($nova_categoria);
    
    return redirect('categorias');
    }


public function destroy($id_categorias){
    Categoria::find($id_categorias)->delete();
        
        return redirect('categorias');
     }

public function edit($id_categorias){
        $categorias = Categoria::find($id_categorias);  
        return view('categorias.edit', compact('categorias'));
     }
    
     public function update(CategoriaRequest $request, $id_categorias){
        Categoria::find($id_categorias)->update($request->all());
         
       return redirect('categorias');
     }
    

}