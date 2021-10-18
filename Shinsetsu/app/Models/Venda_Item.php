<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda_item extends Model
{
    protected $table = 'venda_itens';
    protected $primaryKey = 'id_vendaItens';
    protected $fillable = ['id_vendaItens', 'quantidade', 'vlr_unitário', 'fk_produtos'];

    public function produto(){
        return $this->hasMany('app\Models\Produto');
    }   

    public function venda(){
        return $this->belongsTo('app\Models\Venda', 'id_vendaItens', 'fk_produtos');
    }
    
}

