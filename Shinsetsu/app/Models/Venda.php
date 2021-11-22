<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";
    protected $fillable = ['id_vendas', 'dt_venda','total_itens','valor_vendas'];
    protected $primaryKey = 'id_vendas';



    public function pagamento(){
        return $this->belongsTo(Pagamento::class, 'id_pagamentos');
    }

    public function venda_itens(){
        return $this->belongsTo(Venda_item::class, 'id_vendaItens');
      }
}


