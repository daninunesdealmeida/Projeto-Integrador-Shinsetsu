<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendamentoRequest;
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

public function store(AgendamentoRequest $request){
$novo_agendamento = $request->all();
Agendamento::create($novo_agendamento);

return redirect('agendamentos');
}

public function destroy($id_agendamentos){
   Agendamento::find($id_agendamentos)->delete();
   
   return redirect('agendamentos');
}

public function edit($id_agendamentos){
    $agendamentos = Agendamento::find($id_agendamentos);  
    return view('agendamentos.edit', compact('agendamentos'));
 }

 public function update(AgendamentoRequest $request, $id_agendamentos){
    Agendamento::find($id_agendamentos)->update($request->all());
     
   return redirect('agendamentos');
 }



}

