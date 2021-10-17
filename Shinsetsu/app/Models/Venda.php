<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";
    protected $fillable = ['id_vendas', 'dt_venda', 'documento', 'total_itens', 'valor_vendas', 'fk_produtos'];
    protected $primaryKey = 'id_vendas';

    public function venda_itens(){
        return $this->belongsTo('app\Models\Venda_Item');
    }

    public function pagamento(){
        return $this->belongsTo('app\Models\Pagamento');
    }
}


