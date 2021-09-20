<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $fillable = ['id_categorias', 'nome', 'fk_produtos'];
    protected $primaryKey = 'id_categorias';
}
