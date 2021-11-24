<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = "pagamentos";
    protected $fillable = ['id_pagamentos', 'cartao', 'nome_cartao', 'num_cartao', 'dt_vencimento','fk_vendas', 'fk_usuarios'];
    protected $primaryKey = 'id_pagamentos';

    public function venda(){
        return $this->belongsTo(Venda::class, 'id_pagamentos', 'fk_vendas');
    }

    public function usuario()
    {
      return $this->belongsTo(Usuario::class, 'id_pagamentos', 'fk_usuarios');
    }

}


