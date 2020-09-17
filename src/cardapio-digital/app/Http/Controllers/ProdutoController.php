<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Preco;

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
          'descricao' => 'required',
          'categoria_id' => 'required',
          'legenda1' => 'required',
          'valor1' => 'required',
      ]);

      if ($request->has('legenda2')) {
        $request->validate([
            'legenda2' => 'required',
            'valor2' => 'required',
        ]);
      }

      if ($request->has('legenda3')) {
        $request->validate([
            'legenda3' => 'required',
            'valor3' => 'required',
        ]);
      }

      $produto = Produto::create([
        'nome' => $request->nome,
        'descricao' => $request->descricao,
        'categoria_id' => $request->categoria_id,
      ]);

      Preco::create([
        'legenda' => $request->legenda1,
        'valor' => $request->valor1,
        'produto_id' => $produto->id,
      ]);

      if ($request->has('legenda2')) {
        Preco::create([
          'legenda' => $request->legenda2,
          'valor' => $request->valor2,
          'produto_id' => $produto->id,
        ]);
      }

      if ($request->has('legenda3')) {
        Preco::create([
          'legenda' => $request->legenda3,
          'valor' => $request->valor3,
          'produto_id' => $produto->id,
        ]);
      }

      return redirect()->route('admin')
                       ->with('success','Produto gerado com sucesso.');
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
