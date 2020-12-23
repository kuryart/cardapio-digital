<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Preco;
use TJGazel\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;

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
          'nome' => 'required|max:150',
          'descricao' => 'max:700',
          'categoria_id' => 'required',
          'valor1' => ['required', 'regex:/^(\d+(?:[\.\,]\d{1,2})?)$/'],
        ]);

        $legenda1;
        $legenda2;
        $legenda3;

        if($request->has('legenda1')) {
          if(!$request->filled('legenda1')) {
            $legenda1 = "";
          } else {
            $legenda1 = $request->legenda1;
          }
        }

        if($request->has('legenda2')) {
          if(!$request->filled('legenda2')) {
            $legenda2 = "";
          } else {
            $legenda2 = $request->legenda2;
          }
        }
        
        if($request->has('legenda3')) {
          if(!$request->filled('legenda3')) {
            $legenda3 = "";
          } else {
            $legenda3 = $request->legenda3;
          }
        }        

        if ($request->has('valor2')) {
          $request->validate([
            'valor2' => ['required', 'regex:/^(\d+(?:[\.\,]\d{1,2})?)$/'],
          ]);
        }

        if ($request->has('valor3')) {
          $request->validate([
            'valor3' => ['required', 'regex:/^(\d+(?:[\.\,]\d{1,2})?)$/'],
          ]);
        }

        $produto = Produto::create([
          'nome' => $request->nome,
          'descricao' => $request->descricao,
          'categoria_id' => $request->categoria_id,
        ]);

        Preco::create([
          'legenda' => $legenda1,
          'valor' => $request->valor1,
          'produto_id' => $produto->id,
        ]);

        if ($request->has('valor2')) {
          Preco::create([
            'legenda' => $legenda2,
            'valor' => $request->valor2,
            'produto_id' => $produto->id,
          ]);
        }

        if ($request->has('valor3')) {
          Preco::create([
            'legenda' => $legenda3,
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
          'nome' => 'required|max:150',
          'descricao' => 'max:700',
          'categoria_id' => 'required',
          'valor1' => ['required', 'regex:/^(\d+(?:[\.\,]\d{1,2})?)$/'],
        ]);

        $legenda1;
        $legenda2;
        $legenda3;

        if($request->has('legenda1')) {
          if(!$request->filled('legenda1')) {
            $legenda1 = "";
          } else {
            $legenda1 = $request->legenda1;
          }
        }

        if($request->has('legenda2')) {
          if(!$request->filled('legenda2')) {
            $legenda2 = "";
          } else {
            $legenda2 = $request->legenda2;
          }
        }
        
        if($request->has('legenda3')) {
          if(!$request->filled('legenda3')) {
            $legenda3 = "";
          } else {
            $legenda3 = $request->legenda3;
          }
        }        

        if ($request->has('valor2')) {
          $request->validate([
            'valor2' => ['required', 'regex:/^(\d+(?:[\.\,]\d{1,2})?)$/'],
          ]);
        }

        if ($request->has('valor3')) {
          $request->validate([
            'valor3' => ['required', 'regex:/^(\d+(?:[\.\,]\d{1,2})?)$/'],
          ]);
        }

        $produto->update([
          'nome' => $request->nome,
          'descricao' => $request->descricao,
          'categoria_id' => $request->categoria_id,
        ]);

        Preco::where('produto_id', $produto->id)->delete();

        Preco::create([
          'legenda' => $legenda1,
          'valor' => $request->valor1,
          'produto_id' => $produto->id,
        ]);

        if ($request->has('valor2')) {
          Preco::create([
            'legenda' => $legenda2,
            'valor' => $request->valor2,
            'produto_id' => $produto->id,
          ]);
        }

        if ($request->has('valor3')) {
          Preco::create([
            'legenda' => $legenda3,
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
                         ->with('viewId');
      }

      return redirect()->route('admin.login');
    }
}
