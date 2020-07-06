<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
  private $categoria;

  public function __construct()
  {
    $this->categoria = new Categoria();
  }
}
