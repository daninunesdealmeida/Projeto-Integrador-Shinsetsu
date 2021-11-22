<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'produto_id',
        'preco',
        'quantidade',
        'sessao',
        'id_user'
    ];
}
