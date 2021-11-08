<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos';
    protected $fillable = ['id_agendamentos', 'modalidade', 'dia', 'hora', 'fk_pessoas'];
    protected $primaryKey = 'id_agendamentos';

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'fk_pessoas');

    }

    public function setDiaAttribute($value)
    {
        $this->attributes['dia'] = (new Carbon($value))->format('y-m-d');
    }
}



