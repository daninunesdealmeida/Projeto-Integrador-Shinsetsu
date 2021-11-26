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
            'id_user' => $user
        ]);

        $novo_carrinho = $request->all();
        //upload da imagem
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('img/produtos'), $imagemNome);
            $novo_produto['imagem'] = $imagemNome;

            Carrinho::create($novo_carrinho);

            flash('adicionado ao carrinho')->success();
        }
        return redirect()->back();
    }

    public function carrinhoCompra()
    {
        $carrinhos = DB::select('select  p.nome, c.produto_id,c.preco, sum(c.quantidade) quantidade, max(p.imagem)imagem
        from carrinhos c 
        inner join produtos p on c.produto_id = p.id_produtos
        where c.id_user = ?
        group by c.produto_id,c.preco, p.nome, p.imagem', [auth()->user()->id]);
        //dd($carrinhos);
        return view('web.carrinho', compact('carrinhos'));
    }

    public function finalizaCompra(Request $request)
    {   //dd($request); 
        if ($request->quantidadeGeral <= 0) {
            return $this->carrinhoCompra();
        }
        $user_id = auth()->user()->id;
        //dd($request);     

        $venda = Venda::create([
            'dt_venda' => Carbon::now(),
            'total_itens' => $request->quantidadeGeral,
            'valor_vendas' => $request->totalValorGeral,
            'fk_users' => $user_id,

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
            'fk_vendas' => $venda->id_vendas,
            'fk_usuarios' => $user_id
        ]);

        $deletarCarrinho = DB::select(DB::raw('DELETE from carrinhos where id_user = ?'), [auth()->user()->id]);

        return view('web.site');
    }

    public function destroyCarrinho($id)
    {
        $carrinhos = Carrinho::where('produto_id', $id)->where('id_user', auth()->user()->id)->first();

        if (!$carrinhos) {
            return redirect()->back();
        }

        DB::select(DB::raw('DELETE from carrinhos where produto_id = ? and id_user = ?'), [$id, auth()->user()->id]);

        flash('Removido do carrinho')->error();
        return response()->json(['data' => 'revovido']);
    }

    public function inserePedido(Request $request)
    {
        $user = auth()->user()->id;

        Pedido::create([
            'produto_id' => $request->idproduto,
            'preco' => $request->preco_produto,
            'quantidade' => $request->quantidade,
            'id_user' => $user
        ]);

        $novo_pedido = $request->all();
        //upload da imagem
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('img/produtos'), $imagemNome);
            $novo_produto['imagem'] = $imagemNome;

            Pedido::create($novo_pedido);

            flash('Pedido removido')->success();
        }
        return redirect()->back();
    }
}
