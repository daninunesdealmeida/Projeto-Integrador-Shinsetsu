<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendaRequest;
use App\Models\Venda;
use App\Models\Produto;
use Illuminate\Http\Request;

class VendasController extends Controller
{
  public function index(Request $filter)
    {
        $search = $filter->get('filtragem');
        if ($search == null) {
            $vendas = Venda::orderBy('documento')->paginate(10);
        } else {
            $vendas = Venda::where('id_vendas', 'ilike', '%' . $search . '%')->orderBy('documento')->paginate(10);
        }
        return view("vendas.index", ["vendas" => $vendas]);
    }

    public function create()
    {
        $produtos = Produto::select(['id_produtos', 'nome'])->orderBy('nome')->get();
        return view('vendas.create', compact('produtos', $produtos));
  
    }

    public function store(VendaRequest $request)
    {
        $nova_venda = $request->all();
        Venda::create($nova_venda);
        
        return redirect()->route('vendas');
    }


    public function destroy($id_vendas)
    {
        Venda::find($id_vendas)->delete();

        return redirect()->route('vendas');
    }

    public function edit($id_vendas)
    {
        $vendas = Venda::find($id_vendas);
        $produtos = Produto::select(['id_produtos', 'nome'])->orderBy('nome')->get();
        return view('agendamentos.edit', ['vendas' => $vendas, 'produtos' => $produtos]);
    }

    public function update(VendaRequest $request, $id_vendas)
    {
        Venda::find($id_vendas)->update($request->all());

        return redirect()->route('vendas');
    }

}
