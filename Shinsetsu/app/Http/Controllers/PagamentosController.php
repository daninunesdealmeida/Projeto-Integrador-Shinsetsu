<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Models\Venda;
use App\Http\Requests\PagamentoRequest;
use App\Models\Usuario;

class PagamentosController extends Controller
{
    public function index(Request $filter)
    {
        $search = $filter->get('desc_filtro');
        if ($search == null) {
            $pagamentos = Pagamento::orderBy('nome_cartao')->paginate(10);
        } else {
            $pagamentos = Pagamento::where('id_pagamentos', 'like', '%' . $search . '%')->orderBy('nome_cartao')->paginate(10);
        }
        return view("pagamentos.index", ["pagamentos" => $pagamentos]);
    }

public function create(){
   
    $vendas = Venda::select(['id_vendas', 'id_vendas'])->orderBy('id_vendas')->get();
    $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();
    return view('pagamentos.create', compact('vendas', $vendas, 'usuarios', $usuarios));
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

public function edit(Request $request){

    $pagamentos = Pagamento::find(\Crypt::decrypt($request->get('id_pagamentos')));
    $vendas = Venda::select(['id_vendas', 'dt_venda'])->orderBy('dt_venda')->get();
    $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();   
    return view('pagamentos.edit', ['pagamentos' => $pagamentos, 'vendas' => $vendas, 'usuarios' => $usuarios]);
         }
        
public function update(PagamentoRequest $request, $id_pagamentos){
    Pagamento::find($id_pagamentos)->update($request->all());
             
                return redirect()->route('pagamentos');
         }
        

}
