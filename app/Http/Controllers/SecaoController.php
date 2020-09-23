<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Imports\SecaosImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Secao;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use TJGazel\Toastr\Facades\Toastr;

class SecaoController extends Controller
{
  public function index()
  {
    if (Auth::check() === true)
    {
      $secaos = Secao::latest()->paginate(10);

      return view('secaos.index',compact('secaos'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    return redirect()->route('admin.login');
  }

  public function create()
  {
    if (Auth::check() === true)
    {
      return view('secaos.create');
    }

    return redirect()->route('admin.login');
  }

  public function store(Request $request)
  {
    if (Auth::check() === true)
    {
      // Valida requisição
      $request->validate([
          'nome' => 'required',
      ]);

      // // Armazena imagem
      // $imageExtension = $request->image->extension();
      // $imageName = time().'.'.$imageExtension;
      // $imagePath = 'images/secaos';
      // $imageStorePath = $request->file('image')->storeAs($imagePath, $imageName, 'public');
      // $imageUrl = '/storage/'.$imageStorePath;

      // Cria a seção
      Secao::create([
        'nome' => $request->nome,
      ]);

      $viewId = 1;

      toastr()->success('Seção criada com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with(compact('success', 'viewId'));
    }

    return redirect()->route('admin.login');
  }

  public function show(Secao $secao)
  {
    if (Auth::check() === true)
    {
      return view('secaos.show',compact('secao'));
    }

    return redirect()->route('admin.login');
  }

  public function edit(Secao $secao)
  {
    if (Auth::check() === true)
    {
      return view('secaos.edit',compact('secao'));
    }

    return redirect()->route('admin.login');
  }

  public function update(Request $request, Secao $secao)
  {
    if (Auth::check() === true)
    {
      $request->validate([
          'nome' => 'required',
      ]);

      $secao->update($request->all());

      $viewId = 1;

      toastr()->success('Seção atualizada com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with(compact('success', 'viewId'));
    }

    return redirect()->route('admin.login');
  }

  public function destroy(Secao $secao)
  {
    if (Auth::check() === true)
    {
      $secao->delete();

      $viewId = 1;

      toastr()->success('Seção excluída com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with(compact('success', 'viewId'));
    }

    return redirect()->route('admin.login');
  }

  public function import()
  {
    if (Auth::check() === true)
    {
      Excel::import(new SecaosImport, 'planilha-teste1.xlsx', 'public');

      return redirect('/')->with('success', 'All good!');
    }

    return redirect()->route('admin.login');
  }

  public function testPage()
  {
    if (Auth::check() === true)
    {
      return view('import_test');
    }

    return redirect()->route('admin.login');
  }
}
