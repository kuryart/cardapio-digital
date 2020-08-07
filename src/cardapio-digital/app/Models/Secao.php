<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secao extends Model
{
  protected $fillable = [
      'nome',
      'descricao_resumida',
      'descricao_completa',
      'foto_url'
  ];

  public function relCategoria()
  {
    return $this->hasMany('App\Models\Categoria', 'id');
  }
}
