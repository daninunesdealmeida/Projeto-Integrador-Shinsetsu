<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Venda_item extends Model
{
    protected $table = 'venda_itens';
    protected $primaryKey = 'id_vendaItens';
    protected $fillable = ['quantidade', 'vlr_unitário', 'fk_produtos','fk_vendas2'];

    public function produto(){
        return $this->hasMany(Produto::class);
    }

    public function venda(){
        return $this->hasMany(Venda::class);
    }

}

