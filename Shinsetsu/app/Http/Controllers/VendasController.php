<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendaRequest;
use App\Models\Venda;
use App\Models\Usuario;
use App\Models\Venda_item;
use Illuminate\Http\Request;

class VendasController extends Controller
{
  public function index(Request $filter)
    {
        $search = $filter->get('desc_filtro');
        if ($search == null) {
            $vendas = Venda::orderBy('id_vendas')->paginate(10);
        } else {
            $vendas = Venda::where('id_vendas', 'like', '%' . $search . '%')->orderBy('id_vendas')->paginate(10);
        }
        return view("vendas.index", ["vendas" => $vendas]);
    }

    public function create()
    {   
     
        $venda_itens = Venda_item::select(['id_vendaItens', 'quantidade'])->orderBy('quantidade')->get();
        $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();
        return view('vendas.create', compact('venda_itens', $venda_itens, 'usuarios', $usuarios));
  
    }

    public function store(VendaRequest $request)
      {
        //dd($request);
        $nova_venda = $request->all();
        Venda::create($nova_venda);
        
        return redirect()->route('vendas');

    }


    public function destroy($id_vendas)
    {
        Venda::find($id_vendas)->delete();

        return redirect()->route('vendas');
    }

    public function edit(Request $request)
    {
        $vendas = Venda::find(\Crypt::decrypt($request->get('id_vendas')));
        $venda_itens = Venda_item::select(['id_vendaItens', 'quantidade'])->orderBy('quantidade')->get();
        $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();     
        return view('vendas.edit', ['vendas' => $vendas, 'id_vendaItens' => $venda_itens, 'usuarios' => $usuarios]);
    }

    public function update(VendaRequest $request, $id_vendas)
    {
        Venda::find($id_vendas)->update($request->all());

        return redirect()->route('vendas');
    }

}
