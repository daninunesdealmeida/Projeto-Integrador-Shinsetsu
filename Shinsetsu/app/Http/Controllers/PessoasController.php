<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoasController extends Controller
{
    public function index(){
      $pessoas = Pessoa::All();
      return view('pessoas.index', ['pessoas'=>$pessoas]);

    }

public function create(){
      return view('pessoas.create');
  }
  
  public function store(Request $request){
    $nova_pessoa = $request->all();
    Pessoa::create($nova_pessoa);
    
    return redirect('pessoas');
    }

}
