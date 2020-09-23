<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'categoria_id',
        'foto_url'
    ];

    public function precos()
    {
      return $this->hasMany('App\Models\Preco');
    }

    public function categoria()
    {
      return $this->belongsTo('App\Models\Categoria');
    }
}
