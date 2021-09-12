<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Pessoa;

class PessoasController extends Controller
{
    public function index(){
      $pessoas = Pessoa::All();
      return view('pessoas', ['pessoas'=>$pessoas]);

    }
}
