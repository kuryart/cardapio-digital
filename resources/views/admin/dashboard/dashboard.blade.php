@extends('admin.dashboard.layout')

@section('content')
  <div class="wrapper">

    <div class="cardapio">
      @include('admin.dashboard.cardapio.cardapio')
    </div>

    {{-- <div class="qrcode hide">
      @include('qr_codes.index')
    </div> --}}
  </div>
@endsection
