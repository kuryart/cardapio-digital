<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produto;
use App\Models\Preco;
use TJGazel\Toastr\Facades\Toastr;

class ProdutoController extends Controller
{
    public function index()
    {
      if (Auth::check() === true)
      {
        $produtos = Produto::latest()->paginate(10);

        return view('produtos.index',compact('produtos'))
                   ->with('i', (request()->input('page', 1) - 1) * 5);
      }

      return redirect()->route('admin.login');
    }

    public function create()
    {
      if (Auth::check() === true)
      {
        return view('produtos.create');
      }

      return redirect()->route('admin.login');
    }

    public function store(Request $request)
    {
      if (Auth::check() === true)
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

        $viewId = 1;

        toastr()->success('Produto criado com sucesso.');
        // Redireciona para a rota
        return redirect()->route('admin')
                         ->with('viewId');
      }

      return redirect()->route('admin.login');
    }

    public function show(Produto $produto)
    {
      if (Auth::check() === true)
      {
        return view('produtos.show',compact('produto'));
      }

      return redirect()->route('admin.login');
    }

    public function edit(Produto $produto)
    {
      if (Auth::check() === true)
      {
        return view('produtos.edit',compact('produto'));
      }

      return redirect()->route('admin.login');
    }

    public function update(Request $request, Produto $produto)
    {
      if (Auth::check() === true)
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

        $produto->update([
          'nome' => $request->nome,
          'descricao' => $request->descricao,
          'categoria_id' => $request->categoria_id,
        ]);

        Preco::where('produto_id', $produto->id)->delete();

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

        $viewId = 1;

        toastr()->success('Produto atualizado com sucesso.');
        // Redireciona para a rota
        return redirect()->route('admin')
                         ->with('viewId');
      }

      return redirect()->route('admin.login');
    }

    public function destroy(Produto $produto)
    {
      if (Auth::check() === true)
      {
        Preco::where('produto_id', $produto->id)->delete();
        $produto->delete();

        $viewId = 1;

        toastr()->success('Produto excluído com sucesso.');
        // Redireciona para a rota
        return redirect()->route('admin')
                         ->with(compact('viewId');
      }

      return redirect()->route('admin.login');
    }
}
