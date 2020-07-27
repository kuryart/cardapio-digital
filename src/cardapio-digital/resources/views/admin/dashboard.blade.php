@extends('templates.template')

@section('content')
  <style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        padding-top: 40px;
    }

    .hide {
      display:none;
    }

    .menu {
        width: 100%;
        height: 75px;
        /* background-color: #000000; */
        background-color: #212528;
        position: fixed;
        top:0;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    .light-menu {
        width: 100%;
        height: 75px;
        background-color: rgba(255, 255, 255, 1);
        position: fixed;
        background-color:rgba(4, 180, 49, 0.6);
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #menu-center {
        width: 980px;
        height: 75px;
        margin: 0 auto;
    }
    #menu-center ul {
        margin: 15px 0 0 0;
    }
    #menu-center ul li {
        list-style: none;
        margin: 0 30px 0 0;
        display: inline;
    }
    .active {
        font-family:'Droid Sans', serif;
        font-size: 14px;
        color: #fff;
        text-decoration: none;
        line-height: 50px;
    }
    a {
        font-family:'Droid Sans', serif;
        font-size: 14px;
        color: #fff;
        text-decoration: none;
        line-height: 50px;
    }
    #cardapio {
        /* background-color: grey; */
        height: 100%;
        width: 100%;
        overflow: hidden;
    }
    #qrcode {
        /* background-image: url(images/qrcode-bg.png); */
        height: 100%;
        width: 100%;
    }
    #about {
        background-color: blue;
        height: 100%;
        width: 100%;
    }
    #contact {
        background-color: red;
        height: 100%;
        width: 100%;
    }
  </style>

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

  <div class="wrapper">

    <div class="cardapio">
      <h1>Cardápio</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo doloremque tenetur suscipit dolore est sequi nesciunt, architecto assumenda vitae cupiditate cumque voluptate repudiandae, temporibus ad rem asperiores sed distinctio dolores!</p>
    </div>

    <div class="qrcode hide">
      <h1>QR Codes</h1>
      <button type="button" class="btn btn-primary" onclick="addQrCode()">Adicionar</button>
    </div>

  </div>

  <script>
    $(function(){

      $('#qrcode').click(function(){
      	$('.cardapio').addClass('hide');
        $('.qrcode').removeClass('hide');
      });

      $('#cardapio').click(function(){
      	$('.qrcode').addClass('hide');
        $('.cardapio').removeClass('hide');
      });
    })
  </script>

  <script>
    function addQrCode()
    {
      
    }
  </script>
@endsection
