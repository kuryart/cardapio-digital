<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  // protected $table='categoria';

  public function relProduto()
  {
    return $this->hasMany('App\Models\Produto', 'id');
  }
}
