<?php

namespace App\Imports;

use App\Models\Secao;
use Maatwebsite\Excel\Concerns\ToModel;

class SecaosImport implements ToModel
{
    public function model(array $row)
    {
        return new Secao([
          'nome'     => $row[0],
          'descricao'    => $row[1],
        ]);
    }
}
