<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secao extends Model
{
  protected $fillable = [
      'nome',
      'descricao'
  ];

  public function categorias()
  {
    return $this->hasMany('App\Models\Categoria');
  }
}
