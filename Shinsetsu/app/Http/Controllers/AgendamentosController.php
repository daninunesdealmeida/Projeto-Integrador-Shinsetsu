<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AgendamentoRequest;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use App\Models\User;

class AgendamentosController extends Controller
{


    public function index(Request $filter)
    {
        $user = User::where('id', auth()->user()->id)->first();

        if ($user->isAdmin == 'Cliente') {
            return redirect()->route('loja');
        }

        $search = $filter->get('desc_filtro');
        if ($search == null) {
            $agendamentos = Agendamento::orderBy('nome')->paginate(10);
        } else {
            $agendamentos = Agendamento::where('nome', 'like', '%' . $search . '%')->orderBy('nome')->paginate(10);
        }
        return view("agendamentos.index", ["agendamentos" => $agendamentos]);
    }


    public function create()
    {
        return view('agendamentos.create');
    }

    public function store(AgendamentoRequest $request)
    {
        // dd($request);
        $novo_agendamento = $request->all();
        Agendamento::create($novo_agendamento);

        if (Auth::check() == false) {
            return redirect()->route('site');
        } else {
            return redirect()->route('agendamentos');
        }
    }


    public function destroy($id_agendamentos)
    {
        try {
            Agendamento::find($id_agendamentos)->delete();
            $ret = array('status' => 200, 'msg' => "null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
    }

    public function edit($id_agendamentos)
    {

        $agendamentos = Agendamento::find($id_agendamentos);
        return view('agendamentos.edit', compact('agendamentos'));
    }


    public function update(AgendamentoRequest $request, $id_agendamentos)
    {
        $agendamentos = Agendamento::find($id_agendamentos)->update($request->all());

        return redirect()->route('agendamentos');
    }
}
