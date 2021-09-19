<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;

class AgendamentosController extends Controller
{
    public function index(){
        $agendamentos = Agendamento::All();
        return view('agendamentos.index', ['agendamentos'=>$agendamentos]);
}

public function create(){
    return view('agendamentos.create');
}

public function store(Request $request){
$novo_agendamento = $request->all();
Agendamento::create($novo_agendamento);

return redirect('agendamentos');
}

}

