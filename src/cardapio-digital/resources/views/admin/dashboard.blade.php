@extends('admin.layout')

@section('navbar')
  <div class="m1 menu">
      <div id="menu-center">
          <ul>
              <li>
                <a id="cardapio" class="active" href="#cardapio">Cardápio</a>
              </li>
              <li>
                <a id="qrcode" href="#qrcode">QR Codes</a>
              </li>
              <li>
                <a id="logout" href="{{ route('admin.logout') }}">Logout</a>
              </li>
          </ul>
      </div>
  </div>
@endsection

@section('content')
  <div class="wrapper">

    <div class="cardapio hide">
      <h1>Cardápio</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo doloremque tenetur suscipit dolore est sequi nesciunt, architecto assumenda vitae cupiditate cumque voluptate repudiandae, temporibus ad rem asperiores sed distinctio dolores!</p>
    </div>

    <div class="qrcode hide">
      <!-- <h1>QR Codes</h1>
      <button type="button" class="btn btn-primary" onclick="addQrCode()">Adicionar</button> -->
      @include('qr_codes.index')
    </div>

  </div>
@endsection

@section('scripts')
  <script>
    $(function(){

      $('#qrcode').click(function(){
        console.log('qrcode');
        $('.cardapio').addClass('hide');
        $('.qrcode').removeClass('hide');
      });

      $('#cardapio').click(function(){
        console.log('cardapio');
        $('.qrcode').addClass('hide');
        $('.cardapio').removeClass('hide');
      });
    })
  </script>
@endsection
