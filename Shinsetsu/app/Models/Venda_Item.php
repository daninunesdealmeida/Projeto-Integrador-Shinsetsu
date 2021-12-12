<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Venda_item extends Model
{
    protected $table = 'venda_itens';
    protected $primaryKey = 'id_vendaItens';
    protected $fillable = ['id_vendaItens', 'quantidade', 'vlr_unitario', 'fk_produtos', 'fk_vendas'];

    public function produto(){
        return $this->hasMany(Produto::class, 'fk_produtos');
    }   

    public function venda(){
        return $this->belongsTo(Venda::class, 'fk_vendas');
    }
    
    
}

