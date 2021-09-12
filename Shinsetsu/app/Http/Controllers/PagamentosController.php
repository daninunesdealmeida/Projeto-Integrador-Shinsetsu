<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class PagamentosController extends Controller
{
    public function index(){
        $pagamentos = Pagamento::All();
        return view('pagamentos', ['pagamentos'=>$pagamentos]);
}
}
