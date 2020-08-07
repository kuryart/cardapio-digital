<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $fillable = [
      'nome',
      'secao_id',
      'descricao_resumida',
      'descricao_completa',
      'foto_url'
  ];

  public function relProduto()
  {
    return $this->hasMany('App\Models\Produto', 'id');
  }

  public function relSecao()
  {
    return $this->hasOne('App\Models\Secao');
  }
}
