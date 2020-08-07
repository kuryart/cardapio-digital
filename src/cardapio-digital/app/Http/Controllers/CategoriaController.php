<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
  public function index()
  {
    $categorias = Categoria::latest()->paginate(10);

    return view('categorias.index',compact('categorias'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function create()
  {
    return view('categorias.create');
  }

  public function store(Request $request)
  {
    $request->validate([
        'nome' => 'required',
        'descricao_resumida' => 'required',
        'descricao_completa' => 'required',
        'foto_url'
    ]);

    Categoria::create($request->all());

    return redirect()->route('categorias.index')
                    ->with('success','QR Code gerado com sucesso.');
  }

  public function show(Categoria $categoria)
  {
      return view('categorias.show',compact('categoria'));
  }

  public function edit(Categoria $categoria)
  {
      return view('categorias.edit',compact('categoria'));
  }

  public function update(Request $request, Categoria $categoria)
  {
    $request->validate([
        'nome' => 'required',
        'descricao_resumida' => 'required',
        'descricao_completa' => 'required',
        'foto_url'
    ]);

    $categoria->update($request->all());

    return redirect()->route('categorias.index')
                    ->with('success','Categoria atualizado com sucesso.');
  }

  public function destroy(Categoria $categoria)
  {
    $categoria->delete();

    return redirect()->route('categorias.index')
                    ->with('success','Categoria deletado com sucesso.');
  }
}
