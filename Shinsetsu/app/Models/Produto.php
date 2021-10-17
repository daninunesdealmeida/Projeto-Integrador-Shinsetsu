<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $table = "produtos";
  protected $fillable = ['id_produtos', 'nome', 'especificacao', 'preco', 'qt_estoque', 'estoque_minimo'];
  protected $primaryKey = 'id_produtos';

  public function categoria(){
    return $this->hasMany('app\Models\Categoria');
  }

  public function venda_itens(){
    return $this->belongsTo('app\Models\Venda_Item');
  }

}

