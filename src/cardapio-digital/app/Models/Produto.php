<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'categoria_id',
        'descricao_resumida',
        'descricao_completa',
        'preco',
        'foto_url'
    ];

    public function relCategoria()
    {
      return $this->hasOne('App\Models\Categoria');
    }
}
