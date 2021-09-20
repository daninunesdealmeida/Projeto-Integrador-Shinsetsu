<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Http\Requests\PagamentoRequest;

class PagamentosController extends Controller
{
    public function index(){
        $pagamentos = Pagamento::All();
        return view('pagamentos.index', ['pagamentos'=>$pagamentos]);
}

public function create(){
    return view('pagamentos.create');
}

public function store(Request $request){
    $novo_pagamento = $request->all();
    Pagamento::create($novo_pagamento);
    
    return redirect('pagamentos');
    }

public function destroy($id_pagamentos){
        Pagamento::find($id_pagamentos)->delete();
            
            return redirect('pagamentos');
         }    

public function edit($id_pagamentos){
            $pagamentos = Pagamento::find($id_pagamentos);  
            return view('pagamentos.edit', compact('pagamentos'));
         }
        
public function update(PagamentoRequest $request, $id_pagamentos){
    Pagamento::find($id_pagamentos)->update($request->all());
             
           return redirect('pagamentos');
         }
        

}
