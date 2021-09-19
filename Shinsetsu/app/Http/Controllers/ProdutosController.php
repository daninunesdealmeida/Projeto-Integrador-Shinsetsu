<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::All();
        return view('produtos.index', ['produtos'=>$produtos]);
   }

   public function create(){
    return view('produtos.create');
}

public function store(Request $request){
    $novo_produto = $request->all();
    Produto::create($novo_produto);
    
    return redirect('produtos');
    }

}