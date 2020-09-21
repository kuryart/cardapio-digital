<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\QrCode;
use TJGazel\Toastr\Facades\Toastr;

class QrCodeController extends Controller
{
  public function index()
  {
    if (Auth::check() === true)
    {
      $qrCodes = QrCode::latest()->paginate(10);

      return view('qr_codes.index',compact('qrCodes'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    return redirect()->route('admin.login');
  }

  public function create()
  {
    if (Auth::check() === true)
    {
      return view('qr_codes.create');
    }

    return redirect()->route('admin.login');
  }

  public function store(Request $request)
  {
    if (Auth::check() === true)
    {
      $params = [
          "hash" => bin2hex(random_bytes(64)),
      ];

      QrCode::create($params);

      $viewId = 2;

      toastr()->success('QR Code criado com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with(compact('success', 'viewId'));
    }

    return redirect()->route('admin.login');
  }

  public function show(QrCode $qrCode)
  {
    if (Auth::check() === true)
    {
      return view('qr_codes.show',compact('qrCode'));
    }

    return redirect()->route('admin.login');
  }

  public function edit(QrCode $qrCode)
  {
    if (Auth::check() === true)
    {
      return view('qr_codes.edit',compact('qrCode'));
    }

    return redirect()->route('admin.login');
  }

  public function update(Request $request, QrCode $qrCode)
  {
    if (Auth::check() === true)
    {
      $request->validate([
          'hash' => 'required',
      ]);

      $qrCode->update($request->all());

      $viewId = 2;

      toastr()->success('QR Code atualizado com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with(compact('success', 'viewId'));
    }

    return redirect()->route('admin.login');
  }

  public function destroy(QrCode $qrCode)
  {
    if (Auth::check() === true)
    {
      $qrCode->delete();

      $viewId = 2;

      toastr()->success('QR Code excluído com sucesso.');
      // Redireciona para a rota
      return redirect()->route('admin')
                       ->with(compact('success', 'viewId'));
    }

    return redirect()->route('admin.login');
  }
}
