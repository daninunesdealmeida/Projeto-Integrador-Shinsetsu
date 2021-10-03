<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    protected $fillable = ['id_pessoas', 'nome', 'telefone', 'Rua', 'Bairro', 'Cidade', 'CEP', 'Complemento', 'CPF', 'RG','fk_usuarios'];
    protected $primaryKey = 'id_pessoas';

    public function agendamento(){
        return $this->hasMany('app\Models\Agendamento.php');
    }

    public function usuario(){
      return $this->hasOne('app\Models\Usuario.php');
    }
}
