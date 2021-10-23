<?php

namespace App\Models;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Model;

class Produto_Categoria extends Model
{
  protected $table = "produtos_categoria";
  protected $fillable = ['id','fk_produtos','fk_categorias'];
  protected $primaryKey = 'id';

  public function categoria(){
    return $this->belongsTo(Categoria::class,'id');
  }

  public function peoduto(){
    return $this->belongsTo(Produto::class,'id');
  }
  

}

