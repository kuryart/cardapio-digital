<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReaderController extends Controller
{
  public function index()
  {
      return view('reader');
  }

  public function qrCodeRequestPost(Request $request)
  {
    $input = $request->all();
    \Log::info($input);

    return response()->json(['success'=>'Got Simple Ajax Request.']);    
  }
}
