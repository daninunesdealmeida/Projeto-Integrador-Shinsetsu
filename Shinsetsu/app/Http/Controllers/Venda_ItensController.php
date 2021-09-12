<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda_Item;

class Venda_ItensController extends Controller
{
    public function index(){
        $venda_itens = Venda_item::All();
        return view('venda_itens', ['venda_itens'=>$venda_itens]);//
}
}