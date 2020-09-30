<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
          'nome' => 'required|max:150',
          'descricao' => 'max:700',
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
                       ->with('viewId');
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
          'nome' => 'required|max:150',
          'descricao' => 'max:700',
      ]);

      $secao->update($request->all());

      $viewId = 1;

      toastr()->success('Seção atualizada com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with('viewId');
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
                       ->with('viewId');
    }

    return redirect()->route('admin.login');
  }
}
