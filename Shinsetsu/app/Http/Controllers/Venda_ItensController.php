<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendaItemRequest;
use App\Models\Venda_Item;
use Illuminate\Support\Facades\DB;

class Venda_ItensController extends Controller
{
    public function index()
    {
        $venda_itens = Venda_Item::orderBy('id_vendaItens')->paginate(10);
        //dd($venda_itens);
        return view('venda_Itens.Index', compact('venda_itens')); //
    }

    public function create()
    {
        return view('venda_Itens.create');
    }

    public function store(VendaItemRequest $request)
    {
        $nova_vendaItens = $request->all();
        venda_Item::create($nova_vendaItens);

          return redirect()->route('venda_Itens');
    }

    public function destroy($id_vendaItens)
    {
        venda_Item::find($id_vendaItens)->delete();

          return redirect()->route('venda_Itens');
    }

    public function edit($venda_Item)
    {
        $venda_Item = Venda_Item::find($venda_Item);
        return view('venda_Itens.edit', compact('venda_Itens'));
    }

    public function update(VendaItemRequest $request, $venda_Item)
    {
        Venda_Item::find($venda_Item)->update($request->all());

          return redirect()->route('venda_Itens');
    }
}
