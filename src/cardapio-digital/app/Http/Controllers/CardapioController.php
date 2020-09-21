<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secao;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Preco;

class CardapioController extends Controller
{
  public function index($viewId = 2)
  {
      $secaos = Secao::all();
      $categorias = Categoria::all();
      $produtos = Produto::all();
      $precos = Preco::all();

      // === PRODUTOS PREÇOS - BEGIN ===
      $produtosFinal = [];

      foreach ($produtos as $produto) {
        $produtoTemp = $produto;
        $precosTemp = [];
        $precoTemp = [];

        foreach ($precos as $k => $preco) {
          if (count($precosTemp) >= 3) {
            break;
          }

          if ($preco->produto_id === $produto->id) {
            $precoTemp["legenda"] = $preco->legenda;
            $precoTemp["valor"] = $preco->valor;
            $precosTemp[] = $precoTemp;
            unset($precos[$k]);
          }
        }

        $produtoTemp["precos"] = $precosTemp;
        $produtosFinal[] = $produtoTemp;
      }

      $produtos = $produtosFinal;
      // === PRODUTOS PREÇOS - END ===

      // return view('admin.dashboard')->with('viewId',$viewId);
      return view('cardapio.cardapio')->with(compact('secaos', 'categorias', 'produtos'));

  }
}
