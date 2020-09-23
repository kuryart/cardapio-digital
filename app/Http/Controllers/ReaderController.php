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
    // $qrCodes = QrCode::all();

    if (QrCode::where('hash', '=', $input['qrcode'])->exists())
    {
      Log::debug($input);
      return response()->json(['success'=>'Sucesso.']);
    }

    return response()->json(['error'=>'Houve um erro.']);
  }
}
