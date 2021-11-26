<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";
    protected $fillable = ['id_vendas', 'dt_venda', 'total_itens', 'valor_vendas','fk_users'];
    protected $primaryKey = 'id_vendas';

 
    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_users');
    }

    public function venda_itens(){
        return $this->hasMany(Venda_item::class, 'fk_vendas');
      }
   
    
}
