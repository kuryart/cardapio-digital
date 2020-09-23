<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $fillable = [
      'nome',
      'descricao',
      'secao_id'
  ];

  public function produtos()
  {
    return $this->hasMany('App\Models\Produto');
  }

  public function secao()
  {
    return $this->belongsTo('App\Models\Secao');
  }
}
