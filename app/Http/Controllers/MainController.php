<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class MainController extends Controller
{
  public function main()
  {
    return view('home.index');
    // return redirect('https://deliveryapp.neemo.com.br/delivery/990', 301);
  }

  public function teste()
  {
    return view('home.index');
  }

  public function galeria()
  {
    return view('gallery.gallery');
  }  
}
