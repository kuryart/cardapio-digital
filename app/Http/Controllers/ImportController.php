<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Imports\AllImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
  public function import()
  {
    if (Auth::check() === true)
    {
      Excel::import(new AllImport, 'planilha-cardapio-final.xlsx', 'public');

      return redirect()->route('admin');
    }

    return redirect()->route('admin.login');
  }
}
