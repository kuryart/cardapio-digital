<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preco extends Model
{
  protected $fillable = [
      'legenda',
      'valor',
      'produto_id'
  ];

  public function produto()
  {
    return $this->belongsTo('App\Models\Produto');
  }
}
