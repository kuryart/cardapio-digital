<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // protected $table='produto';

    public function relCategoria()
    {
      return $this->hasOne('App\Models\Categoria');
    }
}
