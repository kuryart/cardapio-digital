<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secao;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\QrCode;

class CardapioController extends Controller
{
  public function index($viewId = 2)
  {
      $secaos = Secao::all();
      $categorias = Categoria::all();
      $produtos = Produto::all();
      $qrCodes = QrCode::all();

      return view('cardapio.cardapio')->with(compact('secaos', 'categorias', 'produtos', 'qrCodes', 'viewId'));
  }
}
