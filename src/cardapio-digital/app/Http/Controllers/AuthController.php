<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Secao;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\QrCode;

class AuthController extends Controller
{
    public function dashboard($viewId = 2)
    {
      if (Auth::check() === true)
      {
        $secaos = Secao::all();
        $categorias = Categoria::all();
        $produtos = Produto::all();
        $qrCodes = QrCode::all();

        // return view('admin.dashboard')->with('viewId',$viewId);
        return view('admin.dashboard')->with(compact('secaos', 'categorias', 'produtos', 'qrCodes', 'viewId'));
      }

      return redirect()->route('admin.login');
    }

    public function showLoginForm()
    {
      return view('admin.form_login');
    }

    public function login(Request $request)
    {
      // var_dump($request->all());

      if(!filter_var($request->email, FILTER_VALIDATE_EMAIL))
      {
        return redirect()->back()->withInput()->withErrors(['Email inválido.']);
      }

      $credentials =
      [
        'email' => $request->email,
        'password' => $request->password
      ];

      // var_dump($credentials);

      if (Auth::attempt($credentials)) {
        return redirect()->route('admin');
      }

      return redirect()->back()->withInput()->withErrors(['Login não permitido.']);

    }

    public function logout()
    {
      Auth::logout();
      return redirect()->route('admin');
    }
}
