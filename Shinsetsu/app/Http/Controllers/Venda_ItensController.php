<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda_Item;

class Venda_ItensController extends Controller
{
    public function index(){
        $venda_itens = Venda_Item::All();
        return view('venda_itens.index', ['venda_itens'=>$venda_itens]);//
}

public function create(){
    return view('venda_intes.create');
}

}