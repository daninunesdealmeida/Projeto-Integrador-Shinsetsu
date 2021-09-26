<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendaRequest;
use App\Models\Venda;

class VendasController extends Controller
{
    public function index()
    {
        $vendas = Venda::orderBy('id_vendas')->paginate(10);
        return view('vendas.index', ['vendas' => $vendas]); //
    }

    public function create()
    {
        return view('vendas.create');
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
        return view('vendas.edit', compact('vendas'));
    }

    public function update(VendaRequest $request, $id_vendas)
    {
        Venda::find($id_vendas)->update($request->all());

        return redirect()->route('vendas');
    }

}
