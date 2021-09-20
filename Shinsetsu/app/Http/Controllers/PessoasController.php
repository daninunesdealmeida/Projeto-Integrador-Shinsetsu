<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
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
  
  public function store(PessoaRequest $request){
    $nova_pessoa = $request->all();
    Pessoa::create($nova_pessoa);
    
    return redirect('pessoas');
    }

public function destroy($id_pessoas){
  Pessoa::find($id_pessoas)->delete();
          
          return redirect('pessoas');
       }    

public function edit($id_pessoas){
        $pessoas = Pessoa::find($id_pessoas);  
        return view('pessoas.edit', compact('pessoas'));
     }
    
public function update(PessoaRequest $request, $id_pessoas){
  Pessoa::find($id_pessoas)->update($request->all());
         
       return redirect('pessoas');
     }       


}
