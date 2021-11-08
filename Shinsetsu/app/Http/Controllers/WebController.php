<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

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
        return view('web.loja',compact('categorias'));
    }

    public function pesquisaCategoria($id)
    {

        if($id != null){
            $categorias = Categoria::where('id',$id)->get();
            $produtos = Produto::where('categoria_id',$id)->get();
        }else{
            $categorias = Categoria::all();
            $produtos = Produto::all();
        }

        return view('web.loja',compact('categorias','produtos'));
    }


}
