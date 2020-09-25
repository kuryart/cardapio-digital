<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\QrCode;

class ReaderController extends Controller
{
  public function index()
  {
    return view('reader.reader');
  }

  public function qrCodeRequestPost(Request $request)
  {
    $input = $request->all();

    if (QrCode::where('hash', '=', $input['qrcode'])->exists())
    {
      Log::debug($input);
      return response()->json(['success'=>route('cardapio')]);
    }

    return response()->json(['error'=>'O QR Code é inválido.']);
  }
}
