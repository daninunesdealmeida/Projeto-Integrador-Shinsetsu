<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";
    protected $fillable = ['id_vendas', 'dt_venda', 'documento', 'total_itens', 'valor_vendas', 'fk_vendasItens', 'fk_usuarios'];
    protected $primaryKey = 'id_vendas';

    public function venda_itens()
    {
        return $this->belongsTo(Venda_item::class, 'fk_vendasItens');
    }

    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class, 'id_vendas');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_usuarios');
    }
}
