<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserConfig extends Model
{
  protected $fillable = [
      'tema_id',
  ];

  public function user()
  {
      return $this->belongsTo('App\Models\User');
  }
}
