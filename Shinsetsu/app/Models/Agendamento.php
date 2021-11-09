<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos'; 
    protected $fillable = ['id_agendamentos', 'nome', 'email', 'modalidade', 'dia', 'hora' ];
    protected $primaryKey = 'id_agendamentos';



    public function setDiaAttribute($value)
    {
        $this->attributes['dia'] = (new Carbon($value))->format('y-m-d');
    }


}



