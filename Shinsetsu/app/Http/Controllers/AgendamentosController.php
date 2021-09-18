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



}

