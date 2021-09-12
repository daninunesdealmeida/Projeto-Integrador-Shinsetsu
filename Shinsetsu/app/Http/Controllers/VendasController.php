<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendasController extends Controller
{
    public function index(){
        $vendas = Venda::All();
        return view('vendas', ['vendas'=>$vendas]);//
}
}