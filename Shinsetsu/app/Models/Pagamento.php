<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = "pagamentos";
    protected $fillable = ['id_pagamentos', 'cartao', 'nome_cartao', 'dt_vencimento', 'boleto', 'fk_vendas', 'fk_usuarios'];
    protected $primaryKey = 'id_pagamentos';

    public function venda()
    {
        return $this->belongsTo(Venda::class, 'id_pagamentos', 'fk_vendas');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_usuarios');
    }
}
