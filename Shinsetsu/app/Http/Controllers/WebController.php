<?php

namespace App\Http\Controllers;

use App\Mail\EmailClient;
use App\Models\Carrinho;
use App\Models\Categoria;
use App\Models\Pagamento;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\Venda_item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

        session()->put('usuario', substr($random, 1, 11));


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
        //dd($request);
        $user = substr(session()->get('usuario'),1,11);

        Carrinho::create([
            'produto_id' => $request->idproduto,
            'preco' => $request->preco_produto,
            'quantidade' => $request->quantidade,
            'id_user' => $user
        ]);

        flash('adicionado ao carrinho')->success();
        $novo_carrinho = $request->all();
        //upload da imagem
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->imagem;
            $extension = $requestImagem->extension();
            $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('img/produtos'), $imagemNome);
            $novo_produto['imagem'] = $imagemNome;

            Carrinho::create($novo_carrinho);


        }
        return redirect()->back();
    }

    public function carrinhoCompra()
    {
        $user = substr(session()->get('usuario'),1,11);

        $carrinhos = DB::select('select  p.nome, c.produto_id,c.preco, sum(c.quantidade) quantidade, max(p.imagem)imagem
        from carrinhos c
        inner join produtos p on c.produto_id = p.id_produtos
        where c.id_user = ?
        group by c.produto_id,c.preco, p.nome, p.imagem', [$user]);
        //dd($carrinhos);
        if (empty($carrinhos)) {
           // return $this->loja()->with('success', 'your message,here');
            return back();
        }
        return view('web.carrinho', compact('carrinhos'));

    }

    public function finalizaCompra(Request $request)
    {   //dd($request);
        if ($request->quantidadeGeral <= 0) {
            return $this->loja();
        }

        //dd($request->all());
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
            'vlr_unitario' => str_replace('R$','',str_replace(',','.',str_replace('.','',$request->valor))),
            'fk_produtos' => $request->produto_id,
            'fk_vendas' => $venda->id_vendas
        ]);

        $pagamento = Pagamento::create([
            'telefone' => $request->telefone,
            'fk_vendas' => $venda->id_vendas,
            'fk_users' => $user_id
        ]);

        $this->sendEmail();

        $session = substr(session()->get('usuario'),1,11);
        $deletarCarrinho = DB::select(DB::raw('DELETE from carrinhos where id_user = ?'), [$session]);

        return redirect('meusPedidos');
    }

    public function destroyCarrinho($id)
    {
        $session = substr(session()->get('usuario'),1,11);
        $carrinhos = Carrinho::where('produto_id', $id)->where('id_user', $session)->first();

        if (!$carrinhos) {
            return redirect()->back();
        }

        DB::select(DB::raw('DELETE from carrinhos where produto_id = ? and id_user = ?'), [$session]);


        return response()->json(['data' => 'removido']);
    }

    public function meusPedidos()
    {
       $vendas = DB::table('vendas')
           ->join('venda_itens','venda_itens.fk_vendas','=','vendas.id_vendas')
           ->join('produtos','produtos.id_produtos','=','venda_itens.fk_produtos')
           ->where('vendas.fk_users',auth()->user()->id)
           ->select('id_vendas','total_itens','quantidade','nome','preco','imagem')
           ->get();
    //mudar para tosql para ver o sql no dd($vendas)

        return view('web.pedido',compact('vendas'));
    }

    public function sendEmail()
    {

        $data = [
            'reply_name' => auth()->user()->name,
            'reply_email' => auth()->user()->email,
            'message' => 'Ficamos muito felizes de você comprar com a gente.
            Olha só, assim que o pagamento for aprovado vamos te enviar um novo e-mail.
            Esse processo pode levar até 3 dias úteis.'
        ];

        Mail::send(new EmailClient($data));

        return redirect()->route('meusPedidos');
    }

    // public function inserePedido(Request $request)
    // {
    //     $user = auth()->user()->id;

    //     Pedido::create([
    //         'produto_id' => $request->idproduto,
    //         'preco' => $request->preco_produto,
    //         'quantidade' => $request->quantidade,
    //         'id_user' => $user
    //     ]);


    //     $novo_pedido = $request->all();
    //     //upload da imagem
    //     if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
    //         $requestImagem = $request->imagem;
    //         $extension = $requestImagem->extension();
    //         $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
    //         $requestImagem->move(public_path('img/produtos'), $imagemNome);
    //         $novo_produto['imagem'] = $imagemNome;

    //         Pedido::create($novo_pedido);


    //     }
    //     return redirect()->back();
    // }
}
