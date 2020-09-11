<?php

namespace App\Http\Controllers;

use App\Imports\SecaosImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Secao;
use Illuminate\Support\Facades\Storage;

class SecaoController extends Controller
{
  public function index()
  {
    $secaos = Secao::latest()->paginate(10);

    return view('secaos.index',compact('secaos'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function create()
  {
    return view('secaos.create');
  }

  public function store(Request $request)
  {
    // Valida requisição
    $request->validate([
        'nome' => 'required',
        'descricao_resumida' => 'required',
        'descricao_completa' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    // Armazena imagem
    $imageExtension = $request->image->extension();
    $imageName = time().'.'.$imageExtension;
    $imagePath = 'images/secaos';

    // $request->image->storeAs($imagePath, $imageName);
    // Storage::disk('public')->put($newFilename, $file);

    $imageStorePath = $request->file('image')->storeAs($imagePath, $imageName, 'public');
    $imageUrl = '/storage/'.$imageStorePath;

    // Cria a seção
    Secao::create([
      'nome' => $request->nome,
      'descricao_resumida' => $request->descricao_resumida,
      'descricao_completa' => $request->descricao_completa,
      'foto_url' => $imageUrl,
    ]);
    // Redireciona para a rota
    return redirect()->route('secaos.index')
                     ->with('success','Seção criada com sucesso.');
  }

  public function show(Secao $secao)
  {
      return view('secaos.show',compact('secao'));
  }

  public function edit(Secao $secao)
  {
      return view('secaos.edit',compact('secao'));
  }

  public function update(Request $request, Secao $secao)
  {
    $request->validate([
        'nome' => 'required',
        'descricao_resumida' => 'required',
        'descricao_completa' => 'required',
        'foto_url'
    ]);

    $secao->update($request->all());

    return redirect()->route('secaos.index')
                      ->with('success','Seção atualizada com sucesso.');
  }

  public function destroy(Secao $secao)
  {
    $secao->delete();

    return redirect()->route('secaos.index')
                    ->with('success','Seção excluída com sucesso.');
  }

  public function import()
  {
      Excel::import(new SecaosImport, 'planilha-teste1.xlsx', 'public');

      return redirect('/')->with('success', 'All good!');
  }

  public function testPage()
  {
    return view('import_test');
  }

}
