@extends('admin.dashboard.layout')

@section('content')
  <div class="wrapper">

    <div class="cardapio hide">
      @include('admin.dashboard.cardapio.cardapio')
    </div>

    <div class="qrcode hide">
      @switch($viewId)
        @case(1)
          @include('qr_codes.create')
          @break
        @case(2)
          @include('qr_codes.index')
          @break
        @default
          @include('qr_codes.index')
      @endswitch
    </div>
  </div>
@endsection
