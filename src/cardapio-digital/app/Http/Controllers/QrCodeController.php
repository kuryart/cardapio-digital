<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QrCode;

class QrCodeController extends Controller
{
  public function index()
  {
      $qrCodes = QrCode::latest()->paginate(10);

      return view('qr_codes.index',compact('qrCodes'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function create()
  {
      return view('qr_codes.create');
  }

  public function store(Request $request)
  {
      $request->validate([
          'hash' => 'required',
      ]);

      QrCode::create($request->all());

      return redirect()->route('qrCodes.index')
                      ->with('success','QR Code gerado com sucesso.');
  }

  public function show(QrCode $qrCode)
  {
      return view('qr_codes.show',compact('qrCode'));
  }

  public function edit(QrCode $qrCode)
  {
      return view('qr_codes.edit',compact('qrCode'));
  }

  public function update(Request $request, QrCode $qrCode)
  {
      $request->validate([
          'hash' => 'required',
      ]);

      $qrCode->update($request->all());

      return redirect()->route('qrCodes.index')
                      ->with('success','QR Code atualizado com sucesso.');
  }

  public function destroy(QrCode $qrCode)
  {
      $qrCode->delete();

      return redirect()->route('qrCodes.index')
                      ->with('success','QR Code deletado com sucesso.');
  }
}
