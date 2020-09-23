<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Preco;

class TestController extends Controller
{
  /*
  public function test()
  {
    // $start = microtime(true);

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

      $precosTempObject = (object) $precosTemp;
      $produtoTemp["precos"] = $precosTempObject;
      $produtosFinal[] = $produtoTemp;
    }
    // === PRODUTOS PREÇOS - END ===
    $produtos = $produtosFinal;
    // dd($produtos);
    dd($produtosFinal);

    // $time = microtime(true) - $start;
    // dd($time);
  }
  */

  public function test()
  {
    $produtos = Produto::all()->map(function ($produto, $k) {
      $precos = Preco::all()->where('produto_id', $produto->id);

      $produto->put('precos', $precos);

      return $produto;
    });
  }
}
