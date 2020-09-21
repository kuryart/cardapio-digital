<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Preco;

class PrecoController extends Controller
{
  // public function index()
  // {
  //   $produtos = Produto::latest()->paginate(10);
  //
  //   return view('produtos.index',compact('produtos'))
  //       ->with('i', (request()->input('page', 1) - 1) * 5);
  // }

  // public function create()
  // {
  //   return view('produtos.create');
  // }

  public function store(Request $request)
  {
    if (Auth::check() === true)
    {
      $request->validate([
          'legenda' => 'required',
          'valor' => 'required',
          'produto_id' => 'required'
      ]);

      Preco::create($request->all());

      return redirect()->route('main');
    }

    return redirect()->route('admin.login');
  }

  // public function show(Preco $preco)
  // {
  //     return view('produtos.show',compact('produto'));
  // }

  public function edit(Preco $preco)
  {
    if (Auth::check() === true)
    {
      return view('precos.edit',compact('preco'));
    }

    return redirect()->route('admin.login');
  }

  public function update(Request $request, Preco $preco)
  {
    if (Auth::check() === true)
    {
      $request->validate([
        'legenda' => 'required',
        'valor' => 'required',
        'produto_id' => 'required'
      ]);

      $preco->update($request->all());

      return redirect()->route('precos.index')
                       ->with('success','Preco atualizado com sucesso.');
    }

    return redirect()->route('admin.login');
  }

  public function destroy(Preco $preco)
  {
    if (Auth::check() === true)
    {
      $preco->delete();

      return redirect()->route('produtos.index')
                       ->with('success','Produto deletado com sucesso.');
    }
    
    return redirect()->route('admin.login');
  }
}
