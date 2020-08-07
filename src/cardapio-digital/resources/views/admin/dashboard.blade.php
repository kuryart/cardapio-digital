@extends('admin.layout')

@section('content')
  <div class="wrapper">

    <div class="cardapio hide">
      <h1>Cardápio</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo doloremque tenetur suscipit dolore est sequi nesciunt, architecto assumenda vitae cupiditate cumque voluptate repudiandae, temporibus ad rem asperiores sed distinctio dolores!</p>
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
