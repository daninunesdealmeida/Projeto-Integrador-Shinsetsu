<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Models\Venda;
use App\Http\Requests\PagamentoRequest;

class PagamentosController extends Controller
{
    public function index(Request $filter)
    {
        $search = $filter->get('filtragem');
        if ($search == null) {
            $pagamentos = Pagamento::orderBy('nome_cartao')->paginate(10);
        } else {
            $pagamentos = Pagamento::where('id_pagamentos', 'ilike', '%' . $search . '%')->orderBy('nome_cartao')->paginate(10);
        }
        return view("pagamentos.index", ["pagamentos" => $pagamentos]);
    }

public function create(){
    $vendas = Venda::select(['id_vendas', 'documento'])->orderBy('documento')->get();
    return view('pagamentos.create', compact('vendas', $vendas));
}

public function store(Request $request){
    $novo_pagamento = $request->all();
    Pagamento::create($novo_pagamento);
    
         return redirect()->route('pagamentos');
    }

public function destroy($id_pagamentos){
        Pagamento::find($id_pagamentos)->delete();
            
                 return redirect()->route('pagamentos');
         }    

public function edit($id_pagamentos){
    $pagamentos = Pagamento::find($id_pagamentos);
    $vendas = Venda::select(['id_vendas', 'nome'])->orderBy('nome')->get();
    return view('pagamentos.edit', ['pagamentos' => $pagamentos, 'vendas' => $vendas]);
         }
        
public function update(PagamentoRequest $request, $id_pagamentos){
    Pagamento::find($id_pagamentos)->update($request->all());
             
                return redirect()->route('pagamentos');
         }
        

}
