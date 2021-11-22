<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use App\Models\Usuario;


class PessoasController extends Controller
{

  public function index(Request $filter)
  {
    $search = $filter->get('desc_filtro');
    if ($search == null) {
      $pessoas = Pessoa::orderBy('nome')->paginate(10);
    } else {
      $pessoas = Pessoa::where('nome', 'like', '%' . $search . '%')->orderBy('nome')->paginate(10);
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

  public function edit(Request $request)
  {
    $pessoas = Pessoa::find(\Crypt::decrypt($request->get('id_pessoas')));
    $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();
    return view('pessoas.edit', ['pessoas' => $pessoas, 'usuarios' => $usuarios]);
  }

  public function update(PessoaRequest $request, $id_pessoas)
  {
    $pessoas = Pessoa::find($id_pessoas)->update($request->all());

    return redirect()->route('pessoas');
  }
}
