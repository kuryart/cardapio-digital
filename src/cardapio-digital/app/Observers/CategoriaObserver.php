<?php

namespace App\Observers;

class CategoriaObserver
{
  public function deleted(Categoria $categoria)
  {
    $produtosNaCategoria = ProdutoCategoria::where('categoria_id', $categoria->id);

    foreach ($produtosNaCategoria as $produto) {
      $produto->categoria_id = config('categoria.sem_categoria_id_padrao');
    }
  }
}
