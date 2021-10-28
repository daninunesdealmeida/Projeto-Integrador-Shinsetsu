<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendamentoRequest;
use App\Models\Agendamento;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class AgendamentosController extends Controller
{


    public function index(Request $filter)
    {
        $search = $filter->get('filtragem');
        if ($search == null) {
            $agendamentos = Agendamento::orderBy('modalidade')->paginate(10);
        } else {
            $agendamentos = Agendamento::where('id_agendamentos', 'ilike', '%' . $search . '%')->orderBy('modalidade')->paginate(10);
        }
        return view("agendamentos.index", ["agendamentos" => $agendamentos]);
    }


    public function create()
    {
        $pessoas = Pessoa::select(['id_pessoas', 'nome'])->orderBy('nome')->get();
        return view('agendamentos.create', compact('pessoas', $pessoas));
  
    }

    public function store(AgendamentoRequest $request)
    {
        $novo_agendamento = $request->all();
        Agendamento::create($novo_agendamento);

        return redirect()->route('agendamentos');
    }

    public function destroy($id_agendamentos)
    {
        Agendamento::find($id_agendamentos)->delete();

        return redirect()->route('agendamentos');
    }

    public function edit($id_agendamentos)
    {

        $agendamentos = Agendamento::find($id_agendamentos);
        $pessoas = Pessoa::select(['id_pessoas', 'nome'])->orderBy('nome')->get();
        return view('agendamentos.edit', ['agendamentos' => $agendamentos, 'pessoas' => $pessoas]);
    }


    public function update(AgendamentoRequest $request, $id_agendamentos)
    {
        $agendamentos = Agendamento::find($id_agendamentos)->update($request->all());

        return redirect()->route('agendamentos');
    }
}
