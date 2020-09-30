<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Categoria;
use TJGazel\Toastr\Facades\Toastr;

class CategoriaController extends Controller
{
  public function index()
  {
    if (Auth::check() === true)
    {
      $categorias = Categoria::latest()->paginate(10);

      return view('categorias.index',compact('categorias'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    return redirect()->route('admin.login');
  }

  public function create()
  {
    if (Auth::check() === true)
    {
      return view('categorias.create');
    }

    return redirect()->route('admin.login');
  }

  public function store(Request $request)
  {
    if (Auth::check() === true)
    {
      $request->validate([
          'nome' => 'required|max:150',
          'descricao' => 'max:700',
          'secao_id' => 'required',
      ]);

      Categoria::create($request->all());

      $viewId = 1;

      toastr()->success('Categoria criada com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with('viewId');
    }

    return redirect()->route('admin.login');
  }

  public function show(Categoria $categoria)
  {
    if (Auth::check() === true)
    {
      return view('categorias.show',compact('categoria'));
    }

    return redirect()->route('admin.login');
  }

  public function edit(Categoria $categoria)
  {
    if (Auth::check() === true)
    {
      return view('categorias.edit',compact('categoria'));
    }

    return redirect()->route('admin.login');
  }

  public function update(Request $request, Categoria $categoria)
  {
    if (Auth::check() === true)
    {
      $request->validate([
        'nome' => 'required|max:150',
        'descricao' => 'max:700',
        'secao_id' => 'required',
      ]);

      $categoria->update($request->all());

      $viewId = 1;

      toastr()->success('Categoria atualizada com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with(compact('viewId');
    }

    return redirect()->route('admin.login');
  }

  public function destroy(Categoria $categoria)
  {
    if (Auth::check() === true)
    {
      $categoria->delete();

      $viewId = 1;

      toastr()->success('Categoria excluída com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with(compact('viewId');
    }

    return redirect()->route('admin.login');
  }
}
