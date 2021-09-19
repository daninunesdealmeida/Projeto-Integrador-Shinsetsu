<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda_Item;
use Illuminate\Support\Facades\DB;

class Venda_ItensController extends Controller
{
    public function index(){
        $venda_itens = Venda_Item::all();
        //dd($venda_itens);
        return view('venda_Itens.Index', compact('venda_itens'));//
}

public function create(){
    return view('venda_Itens.create');
}

public function store(Request $request){
    $nova_vendaItens = $request->all();
    venda_Item::create($nova_vendaItens);
    
    return redirect('venda_Itens');
    }


}