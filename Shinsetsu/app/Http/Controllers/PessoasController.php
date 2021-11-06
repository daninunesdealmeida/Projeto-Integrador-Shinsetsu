<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PessoasController extends Controller
{

  public function index(Request $filter)
  {
    $search = $filter->get('filtragem');
    if ($search == null) {
      $pessoas = Pessoa::orderBy('nome')->paginate(10);
    } else {
      $pessoas = Pessoa::where('id_pessoas', 'ilike', '%' . $search . '%')->orderBy('nome')->paginate(10);
    }
    return view("pessoas.index", ["pessoas" => $pessoas]);
  }

  public function create()
  {
    $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();
    return view('pessoas.create', compact('usuarios', $usuarios));
  }

  public function store(PessoaRequest $request)
  {
    $nova_pessoa = $request->all();
    Pessoa::create($nova_pessoa);
    return redirect()->route('pessoas');
  }

  public function destroy($id_pessoas)
  {
    /*Pessoa::find($id_pessoas)->delete();
    return redirect()->route('pessoas');*/

    try {
      Pessoa::find($id_pessoas)->delete();
      $ret = array('status' => 200, 'msg' => "null");
    } catch (\Illuminate\Database\QueryException $e) {
      $ret = array('status' => 500, 'msg' => $e->getMessage());
    } catch (\PDOException $e) {
      $ret = array('status' => 500, 'msg' => $e->getMessage());
    }
    return $ret;
  }

  public function edit($id_pessoas)
  {
    $pessoas = Pessoa::find($id_pessoas);
    $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();
    return view('pessoas.edit', ['pessoas' => $pessoas, 'usuarios' => $usuarios]);
  }

  public function update(PessoaRequest $request, $id_pessoas)
  {
    $pessoas = Pessoa::find($id_pessoas)->update($request->all());

    return redirect()->route('pessoas');
  }
}
