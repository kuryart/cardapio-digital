@extends('home.layout')

@section('content')
  <!-- Preloader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Preloader -->
  <div class="tm-top-header">
    <div class="container">
      <div class="row">
        <div class="tm-top-header-inner">
          <div class="tm-logo-container">
            <img src="img/cafe-do-lado-logo.png" alt="Logo" class="tm-site-logo-nav">
          </div>
          <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
          <nav class="tm-nav">
            <ul>
              <li><a href="{{ route('main') }}" class="active">Home</a></li>
              <li><a href="{{ route('cardapio') }}">Cardápio</a></li>
              <li><a href="https://deliveryapp.neemo.com.br/delivery/990">Delivery</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <section class="tm-welcome-section">
    <div class="container tm-position-relative">
      <div class="tm-lights-container">
        <img src="img/light.png" alt="Light" class="light light-1">
        <img src="img/light.png" alt="Light" class="light light-2">
        <img src="img/light.png" alt="Light" class="light light-3">
      </div>
      <div class="row tm-welcome-content">
        <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Bem-vindo ao&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
        <h2 class="light-gold-text tm-welcome-header-2">Café do Lado</h2>
        <p class="white-text tm-welcome-description">
          Entre um riff de Jimi Hendrix e a poesia de Caetano Veloso, sabores completam a festa. Apostamos na diversidade: o certo pode ser questionado e o novo é recebido com prazer. A nossa gastronomia respeita os ensinamentos da "old school" e é servida com pitadas de ousadia pela chef Gabriela Atta, que imprime contemporaneidade em pratos clássicos e bem elaborados. 
        </p>
        <p class="white-text tm-welcome-description">
          Nessa mistura de iguarias e ingredientes está a nossa receita para ampliar suas experiências sensoriais e levar à mesa sabores que te façam feliz. Uma elegante e seleta carta de vinhos e cervejas artesanais completam nosso menu. Beber e comer bem fazem a vida ter mais sentido, e a boa música deixa tudo isso mais divertido. Bem-vindo ao Café do Lado!
        </p>
        <a href="#main" class="col tm-more-button tm-more-button-welcome">Detalhes</a>
      </div>
    </div>
  </section>
  <div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section tm-section-margin-bottom-0 row">
        <div class="col-lg-12 tm-section-header-container">
          <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Saiba Mais</h2>
          <div class="tm-hr-container"><hr class="tm-hr"></div>
        </div>
        <div class="col-lg-12 tm-popular-items-container">
          <div class="tm-popular-item">
            <img src="img/cardapio.jpg" alt="Popular" class="tm-popular-item-img">
            <div class="tm-popular-item-description">
              <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">C</span>ardápio</h3><hr class="tm-popular-item-hr">
              <p>Confira todos os nossos pratos e bebidas diretamente no nosso cardápio digital.</p>
              <div class="order-now-container">
                <a href="{{ route('cardapio') }}" class="order-now-link tm-handwriting-font">Vamos Lá!</a>
              </div>
            </div>
          </div>
          <div class="tm-popular-item">
            <img src="img/delivery.jpg" alt="Popular" class="tm-popular-item-img">
            <div class="tm-popular-item-description">
              <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">D</span>elivery</h3><hr class="tm-popular-item-hr">
              <p>Utilize nosso sistema de delivery para poder apreciar todas as nossas opções sem sair de casa.</p>
              <div class="order-now-container">
                <a href="https://deliveryapp.neemo.com.br/delivery/990" class="order-now-link tm-handwriting-font">Vamos Lá!</a>
              </div>
            </div>
          </div>
          <div class="tm-popular-item">
            <img src="img/terca-burguer.jpg" alt="Popular" class="tm-popular-item-img">
            <div class="tm-popular-item-description">
              <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">S</span>eção de Fotos</h3><hr class="tm-popular-item-hr">
              <p>Confira algumas fotos da nossa galeria para conhecer mais sobre os nossos produtos.</p>
              <div class="order-now-container">
              <a href="{{ route('galeria') }}" class="order-now-link tm-handwriting-font">Vamos Lá!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <footer>
    <div class="tm-black-bg">
      <div class="container">
        <div class="row margin-bottom-60">
          <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
            <h3 class="tm-footer-div-title">Mapa do Site</h3>
            <ul>
              <li><a href="{{ route('main') }}">Início</a></li>
              <li><a href="{{ route('cardapio') }}">Cardápio</a></li>
              <li><a href="https://deliveryapp.neemo.com.br/delivery/990">Delivery</a></li>
            </ul>
          </nav>
          <div class="col-lg-5 col-md-5 tm-footer-div">
            <img src="img/cafe-do-lado-logo.png" alt="Logo" class="tm-site-logo-footer">
          </div>
          <div class="col-lg-4 col-md-4 tm-footer-div">
            <h3 class="tm-footer-div-title">Redes Sociais</h3>
            <p>Siga o Café do Lado nas nossas redes sociais e fique sempre por dentro das novidades.</p>
            <div class="tm-social-icons-container">
              <a href="https://www.facebook.com/cafedolado" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/cafedolado/" class="tm-social-icon"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row tm-copyright">
         <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2020 Café do Lado</p>
       </div>
     </div>
   </div>
  </footer> <!-- Footer content-->


@endsection
