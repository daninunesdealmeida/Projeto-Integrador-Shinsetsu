<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Categoria;
use App\Models\Pagamento;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\Venda_item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\AgendamentoRequest;
use App\Models\Agendamento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $random = md5(uniqid(rand(), true));

        session()->put('usuario', substr($random, 1, 40));


        return view('web.site');
    }

    public function login()
    {
        return view('web.pglogin');
    }

    public function loja()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();
        $carrinhos = Carrinho::all();
        return view('web.loja', compact('categorias', 'produtos', 'carrinhos'));

    }

    public function pesquisaCategoria($id)
    {

        if ($id != null) {
            $categorias = Categoria::where('id_categorias', $id)->get();
            $produtos = Produto::where('fk_categoria', $id)->get();
        } else {
            $categorias = Categoria::all();
            $produtos = Produto::all();
        }

        return view('web.loja', compact('categorias', 'produtos'));
    }

    public function insereCarrinho(Request $request)
    {
        $user = auth()->user()->id;

        Carrinho::create([
            'produto_id' => $request->idproduto,
            'preco' => $request->preco_produto,
            'quantidade' => $request->quantidade,
            'imagem' => $request->imagem,
            'id_user' => $user
        ]);

        flash('adicionado ao carrinho')->success(); 

        return redirect()->back();
    }

    public function carrinhoCompra()
    {
        $carrinhos = Carrinho::all();

        return view('web.carrinho', compact('carrinhos'));
    }

    public function finalizaCompra(Request $request)
    {
        //dd($request->all());

        $venda = Venda::create([
            'dt_venda' => Carbon::now(),
            'total_itens' => $request->quantidadeGeral,
            'valor_vendas' => $request->totalValorGeral
        ]);

        $vendaItens = Venda_item::create([
            'quantidade' => $request->quantidade,
            'vlr_unitário' => $request->valor,
            'fk_produtos' => $request->produto_id,
            'fk_vendas' => $venda->id_vendas
        ]);

        $pagamento = Pagamento::create([
            'cartao' => $request->cartao,
            'nome_cartao' => $request->nomecartao,
            'num_cartao' => $request->num_cartao,
            'dt_vencimento' => $request->dt_vencimento,
            'fk_vendas' => $venda->id_vendas
        ]);

        $deletarCarrinho = DB::select(DB::raw('DELETE from carrinhos where id_user = ?'), [auth()->user()->id]);

        return view('web.site');
    }


}
