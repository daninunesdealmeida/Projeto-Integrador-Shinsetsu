<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['id_usuarios', 'nome', 'email', 'email_verified_at', 'senha'];
    protected $primaryKey = 'id_usuarios';

    public function pessoa(){
        return $this->hasOne('app\Models\Pessoa');
      }
}
