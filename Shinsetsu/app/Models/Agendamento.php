<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos';
    protected $fillable = ['id_agendamentos', 'modalidade', 'dia', 'hora', 'fk_pessoas'];
    protected $primaryKey = 'id_agendamentos';

    public function pessoa(){
        return $this->belongsTo('App\Models\Pessoa', 'fk_pessoas', 'id_pessoas');
       
    }
}



