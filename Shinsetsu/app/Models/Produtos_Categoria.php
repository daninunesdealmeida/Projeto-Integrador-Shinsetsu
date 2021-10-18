<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $table = "produtos_categoria";
  protected $fillable = ['id','fk_produtos','fk_categorias'];
  protected $primaryKey = 'id';

  public function categoria(){
    return $this->belongsTo('app\Models\Categoria','id', 'fk_categorias');
  }
  

}

