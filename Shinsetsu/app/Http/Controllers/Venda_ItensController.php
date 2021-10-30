<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendaItemRequest;
use App\Models\Produto;
use App\Models\Venda_Item;
use App\Models\Venda;

use Illuminate\Http\Request;

class Venda_ItensController extends Controller
{
    public function index(Request $filter)
    {
        $search = $filter->get('filtragem');
        if ($search == null) {
            $venda_Itens = Venda_Item::orderBy('id_vendaItens')->paginate(10);
        } else {
            $venda_Itens = Venda_Item::where('id_vendaItens', 'ilike', '%' . $search . '%')->orderBy('vlr_unitário')->paginate(10);
        }
        return view("venda_Itens.index", ["venda_Itens" => $venda_Itens]);
    }

    public function create()
    {
        $produtos = Produto::select(['id_produtos', 'nome'])->orderBy('nome')->get();
        return view('venda_Itens.create', compact('produtos', $produtos));
    }

    public function store(VendaItemRequest $request)
    {
        $nova_vendaItens = $request->all();
        Venda_Item::create($nova_vendaItens);

          return redirect()->route('venda_Itens');
    }

    public function destroy($id_vendaItens)
    {
        Venda_Item::find($id_vendaItens)->delete();

          return redirect()->route('venda_Itens');
    }

    public function edit($id_vendaItens)
    {
        $venda_Itens = Venda_Item::find($id_vendaItens);        
        $produtos = Produto::select(['id_produtos', 'nome'])->orderBy('nome')->get();
        return view('venda_Itens.edit', ['venda_Itens' => $venda_Itens, 'produtos' => $produtos]);
         
       /* Venda_Item::find($id_vendaItens);
        return view("venda_Itens.index", ["venda_Itens" => $venda_Item]);
        /*$venda_Item = Venda_Item::find($id_vendaItens);
        $vendas = Venda::select(['id_vendas', 'nome'])->orderBy('documento')->get();
        return view('venda_Itens.edit', ['venda_Itens' => $venda_Item, 'vendas' => $vendas]);
        return view('venda_Itens.edit');*/
    }

    public function update(VendaItemRequest $request, $venda_Item)
    {
        Venda_Item::find($venda_Item)->update($request->all());

          return redirect()->route('venda_Itens');
    }
}
