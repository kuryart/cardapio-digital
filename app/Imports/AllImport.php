<?php

namespace App\Imports;

use App\Models\Secao;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Preco;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Log;

class AllImport implements ToCollection
{
  public function collection(Collection $rows)
  {
    $secao;
    $categoria;
    $produto;
    $preco;

    foreach ($rows as $row)
    {
      $debug = "DEBUG | Col.1: ".$row[0]." | Col.2: ".$row[1]." | Col.3: ".$row[2];

      Log::debug($debug);

      if (trim($row[0]) === "sec") {
        $secao = Secao::create([
            'nome' => mb_strtoupper($row[1], 'UTF-8'),
            'descricao' => $row[2],
        ]);
      } elseif (trim($row[0]) === "cat") {
        $categoria = Categoria::create([
            'nome' => mb_strtoupper($row[1], 'UTF-8'),
            'descricao' => $row[2],
            'secao_id' => $secao->id,
        ]);
      } elseif (trim($row[0]) === "prod") {
        $produto = Produto::create([
            'nome' => mb_strtoupper($row[1], 'UTF-8'),
            'descricao' => $row[2],
            'categoria_id' => $categoria->id,
        ]);
      } elseif (trim($row[0]) === "prec") {
        $preco = Preco::create([
            'legenda' => mb_strtoupper($row[1], 'UTF-8'),
            'valor' => $row[2],
            'produto_id' => $produto->id,
        ]);
      } else {
        $error = "Erro ao importar os dados da planilha. | Col.1: ".$row[0]." | Col.2: ".$row[1]." | Col.3: ".$row[2];

        Log::debug($error);
      }
    }
  }
}
