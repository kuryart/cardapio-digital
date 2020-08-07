<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard($viewId = 2)
    {
      if (Auth::check() === true)
      {
        return view('admin.dashboard')->with('viewId',$viewId);
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
