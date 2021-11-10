<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\AgendamentoRequest;
use App\Models\Agendamento;
use Illuminate\Support\Facades\Auth;

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
        return view('web.loja',compact('categorias', 'produtos'));
        
    }

    public function pesquisaCategoria($id)
    {

        if($id != null){
            $categorias = Categoria::where('id_categorias',$id)->get();
            $produtos = Produto::where('fk_categoria',$id)->get();
        }else{
            $categorias = Categoria::all();
            $produtos = Produto::all();
        }

        return view('web.loja',compact('categorias','produtos'));
    }



}
