<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
      $produtos = Produto::latest()->paginate(10);

      return view('produtos.index',compact('produtos'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
      return view('produtos.create');
    }

    public function store(Request $request)
    {
      $request->validate([
          'nome' => 'required',
          'descricao_resumida' => 'required',
          'descricao_completa' => 'required',
          'preco' => 'required',
          'foto_url'
      ]);

      Produto::create($request->all());

      return redirect()->route('produtos.index')
                      ->with('success','QR Code gerado com sucesso.');
    }

    public function show(Produto $produto)
    {
        return view('produtos.show',compact('produto'));
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit',compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
      $request->validate([
          'nome' => 'required',
          'descricao_resumida' => 'required',
          'descricao_completa' => 'required',
          'preco' => 'required',
          'foto_url'
      ]);

      $produto->update($request->all());

      return redirect()->route('produtos.index')
                      ->with('success','Produto atualizado com sucesso.');
    }

    public function destroy(Produto $produto)
    {
      $produto->delete();

      return redirect()->route('produtos.index')
                      ->with('success','Produto deletado com sucesso.');
    }
}
