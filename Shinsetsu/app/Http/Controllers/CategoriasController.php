<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

public function store(Request $request){
    $nova_categoria = $request->all();
    Categoria::create($nova_categoria);
    
    return redirect('categorias');
    }


}