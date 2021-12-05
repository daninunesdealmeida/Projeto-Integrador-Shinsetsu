<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $table = 'users';
  protected $fillable = ['id', 'name', 'email', 'email_verified_at', 'password'];
  protected $primaryKey = 'id';

  public function pessoa()
  {
    return $this->belongsTo(Pessoa::class);
  }

  public function venda()
  {
    return $this->hasMany(Venda::class);
  }

  public function pagamento()
  {
    return $this->hasMany(Pagamento::class, 'name');
  }

  public function setPlancRateioAttribute($value)
  {
    $this->attributes['isAdmin'] = ($value === true || $value === 'on' ? 'Cliente' : '');
  }
}
