<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Venda_item extends Model
{
    protected $table = 'venda_itens';
    protected $primaryKey = 'id_vendaItens';
    protected $fillable = ['id_vendaItens', 'quantidade', 'vlr_unitário', 'fk_produtos'];

    public function produto(){
        return $this->hasMany(Produto::class);
    }   

    public function venda(){
        return $this->belongsTo(Venda::class, 'id_vendaItens');
    }
    
}

