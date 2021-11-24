<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $table = "produtos";
  protected $fillable = ['id_produtos', 'nome', 'especificacao', 'preco', 'qt_estoque', 'estoque_minimo', 'imagem', 'fk_categoria'];
  protected $primaryKey = 'id_produtos';

  public function categoria(){
    return $this->belongsTo(Categoria::class, 'fk_categoria');
  }

  public function venda_itens(){
    return $this->belongsTo(Venda_item::class);
  }

  public function pagamento(){
    return $this->hasMany(Pagamento::class);
}

}

