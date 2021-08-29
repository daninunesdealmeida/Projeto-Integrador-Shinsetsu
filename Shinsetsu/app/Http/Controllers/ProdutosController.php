<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
   public function index(){
       $nome = "Kimono Mizuno";
       return view('produtos', ['nome'=>$nome]);
   }
}