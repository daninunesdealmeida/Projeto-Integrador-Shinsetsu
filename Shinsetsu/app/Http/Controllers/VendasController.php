<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendaRequest;
use App\Models\Venda;
use App\Models\Usuario;
use App\Models\Venda_item;
use App\Models\Produto;
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
     
        $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();
       // dd($usuarios);
        return view('vendas.create', compact('usuarios', $usuarios));
  
    }

    public function store(Request $request){
        $venda = Venda::create([
                            'dt_venda' => $request->get('dt_venda'),
                            'total_itens' => $request->get('total_itens'),
                            'valor_vendas' => $request->get('valor_vendas'),
                            'fk_users' => $request->get('fk_users')
                        ]);

        $produtos = $request->produtos;

        //dd($produtos);
        foreach($produtos as $a => $value) {            
            Venda_Item::create([
                            'id_vendas' => $venda->id_vendas,
                            'id_produtos' => $produtos[$a]
                        ]);
        }

        return redirect()->route('vendas');
    }


    // public function destroy($id_vendas)
    // {
    //     Venda::find($id_vendas)->delete();

    //     return redirect()->route('vendas');
    // }

    // public function edit(Request $request)
    // {
    //     $vendas = Venda::find(\Crypt::decrypt($request->get('id_vendas')));
    //     $usuarios = Usuario::select(['id', 'name'])->orderBy('name')->get();     
    //     return view('vendas.edit', ['vendas' => $vendas, 'usuarios' => $usuarios]);
    // }

    // public function update(VendaRequest $request, $id_vendas)
    // {
    //     Venda::find($id_vendas)->update($request->all());

    //     return redirect()->route('vendas');
    // }

}
