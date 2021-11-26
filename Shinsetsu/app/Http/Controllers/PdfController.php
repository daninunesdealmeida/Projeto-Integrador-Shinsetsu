<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Pessoa;
use App\Models\Categoria;
use App\Models\Pagamento;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use App\Models\Venda_item;
use PDF;

class PdfController extends Controller
{
    public function geraPdfAgendamentos()
    {
        $agendamentos = Agendamento::all();
        $pdf = PDF::loadView('PDFs\agendamentoPdf', compact('agendamentos'));
        return $pdf->setPaper('a4')->stream('Todos_Agendamentos.pdf');
    }


    public function geraPdfPessoa()
    {
        $pessoas = Pessoa::all();
        $pdf = PDF::loadView('PDFs\pessoaPdf', compact('pessoas'));
        return $pdf->setPaper('a4')->stream('Todas_Pessoas.pdf');
    }

    public function geraPdfCategorias()
    {
        $categorias = Categoria::all();
        $pdf = PDF::loadView('PDFs\categoriaPdf', compact('categorias'));
        return $pdf->setPaper('a4')->stream('Todas_Categorias.pdf');
    }


    public function geraPdfPagamentos()
    {
        $pagamentos = Pagamento::all();
        $pdf = PDF::loadView('PDFs\pagamentoPdf', compact('pagamentos'));
        return $pdf->setPaper('a4')->stream('Todos_Pagamentos.pdf');
    }

    public function geraPdfProdutos()
    {
        $produtos = Produto::all();
        $pdf = PDF::loadView('PDFs\produtoPdf', compact('produtos'));
        return $pdf->setPaper('a4')->stream('Todos_produtos.pdf');
    }

    public function geraPdfUsers()
    {
        $users = User::all();
       // dd($users);
        $pdf = PDF::loadView('PDFs\usersPdf', compact('users'));
        return $pdf->setPaper('a4')->stream('Todos_Users.pdf');
    }

    public function geraPdfVendas()
    {
        $vendas = Venda::all();
        $pdf = PDF::loadView('PDFs\vendaPdf', compact('vendas'));
        return $pdf->setPaper('a4')->stream('Todas_vendas.pdf');
    }
}
