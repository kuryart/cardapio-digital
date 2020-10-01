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
            <!-- <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1> -->
          </div>
          <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
          <nav class="tm-nav">
            <ul>
              <li><a href="{{ route('main') }}" class="active">Home</a></li>
              <li><a href="{{ route('reader') }}">Cardápio</a></li>
              <li><a href="https://deliveryapp.neemo.com.br/delivery/990">Delivery</a></li>
              <!-- <li><a href="contact.html">Contact</a></li> -->
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
        <h2 class="gold-text tm-welcome-header-2">Café do Lado</h2>
        <!-- <p class="gray-text tm-welcome-description">Cafe House template is a mobile-friendly responsive <span class="gold-text">Bootstrap v3.3.5</span> layout by <span class="gold-text">templatemo</span>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusnec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p> -->
        <p class="gray-text tm-welcome-description">O Café do Lado tem mais de <span class="gold-text">X anos</span> de tradição na cidade de Marília - SP. Servindo sempre você, sua família e seus amigos com a qualidade, conforto, eficiência e elegância que vocês merecem - e sempre com boa música, é claro! Venha conhecer nossa cafeteria, nossas cartas de cervejas e vinhos nacionais e importados, e os melhores pratos selecionados pelos nossos chefes.</p>
        <a href="#main" class="col tm-more-button tm-more-button-welcome">Detalhes</a>
      </div>
      <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">
    </div>
  </section>
  <div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <!-- <section class="tm-section row">
        <div class="col-lg-9 col-md-9 col-sm-8">
          <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
          <h2>Cafe House</h2>
          <p class="tm-welcome-description">This is free HTML5 website template from <span class="blue-text">template</span><span class="green-text">mo</span>. Fndimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Ettiam sit amet orci eget eros faucibus tincidunt.</p>
          <a href="#" class="tm-more-button margin-top-30">Read More</a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
          <div class="inline-block shadow-img">
            <img src="img/1.jpg" alt="Image" class="img-circle img-thumbnail">
          </div>
        </div>
      </section> -->
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
                <a href="{{ route('reader') }}" class="order-now-link tm-handwriting-font">Vamos Lá!</a>
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
              <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">T</span>erça Burguer</h3><hr class="tm-popular-item-hr">
              <p>Toda terça-feira é dia da promoção Terça Burguer aqui no Café do Lado!</p>
              <div class="order-now-container">
                <a href="{{ route('reader') }}" class="order-now-link tm-handwriting-font">Vamos Lá!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="tm-section row">
        <div class="col-lg-12 tm-section-header-container">
          <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Nossas Delícias</h2>
          <div class="tm-hr-container"><hr class="tm-hr"></div>
        </div>
        <div class="col-lg-12 tm-special-container margin-top-60">
          <div class="tm-special-container-left">
            <div class="tm-special-item">
              <div class="tm-special-img-container">
                <img src="img/file-veloso.jpg" alt="Special" class="tm-special-img img-responsive">
                <a href="{{ route('reader') }}">
                  <div class="tm-special-description">
                    <h3 class="tm-special-title">Filé do Veloso</h3>
                    <p>Medalhões de filet mignon grelhados, servidos com panaché de legumes grelhados, alho laminado crocante e arroz branco.</p>
                  </div>
                </a>
              </div>
            </div>

            <div class="tm-special-item">
              <div class="tm-special-img-container">
                <img src="img/file-mick-jagger.jpg" alt="Special" class="tm-special-img img-responsive">
                <a href="{{ route('reader') }}">
                  <div class="tm-special-description">
                    <h3 class="tm-special-title">Filé Mick Jagger</h3>
                    <p>Medalhões de filet mignon grelhados, servidos ao molho de cogumelos e acompanhados de fettuccine na manteiga, sálvia e azeite trufado.</p>
                  </div>
                </a>
              </div>
            </div>

            <div class="tm-special-item">
              <div class="tm-special-img-container">
                <img src="img/filet-au-poivre.jpg" alt="Special" class="tm-special-img img-responsive">
                <a href="{{ route('reader') }}">
                  <div class="tm-special-description">
                    <h3 class="tm-special-title">Filet au Poivre</h3>
                    <p>Medalhões de filet mignon grelhados, servidos ao molho de mix de pimentas do reino com creme de leite e mostarda Dijon, acompanhados de gratin de batatas.</p>
                  </div>
                </a>
              </div>
            </div>

            <div class="tm-special-item">
              <div class="tm-special-img-container">
                <img src="img/super-dupper-double.jpg" alt="Special" class="tm-special-img img-responsive">
                <a href="{{ route('reader') }}">
                  <div class="tm-special-description">
                    <h3 class="tm-special-title">Super Dupper Double</h3>
                    <p>Pão, dois hambúrgueres de Angus grelhados, cheddar cremoso, bacon, picles de pepino, tomate e molho barbecue.</p>
                  </div>
                </a>
              </div>
            </div>

          </div>
          <!-- <div class="tm-special-container-right">
            <div>
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="img/file-jimi-hendrix.jpg" alt="Special" class="img-responsive">
                  <a href="#">
                    <div class="tm-special-description">
                      <p>Medalhões de filet mignon grelhados com molho de cerveja preta e shitake. Acompanha gnocchi na manteiga, sálvia e azeite trufado.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="tm-special-container-lower">
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="img/salmao-janis-joplin.jpg" alt="Special" class="img-responsive">
                  <a href="#">
                    <div class="tm-special-description">
                      <p>Posta de salmão grelhada, servida sobre cama de mix de cogumelos, regada com manteiga de ervas e raspas de limão. Acompanham limão siciliano grelhado e risotto de alho-poró.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="img/salada-caprese.jpg" alt="Special" class="img-responsive">
                  <a href="#">
                    <div class="tm-special-description">
                      <p>Burrata de mussarela de búfala com pesto de manjericão, tomates cereja, folhas de rúcula e tapenade de azeitonas pretas.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </section>
      <section class="tm-section">
        <div class="row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo" class="tm-site-logo"> Cardápio Completo</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
        </div>
        <div class="row">
          <div class="tm-daily-menu-container margin-top-60">
            <div class="col-lg-4 col-md-4">
              <img src="img/menu-board.png" alt="Menu board" class="tm-daily-menu-img">
            </div>
            <div class="col-lg-8 col-md-8">
              <p>E aí, gostou? Confira essas e muitas outras maravilhosas opções no nosso cardápio digital completo, onde você vai encontrar:</p>
              <ol class="margin-top-30">
                <li>Entradas;</li>
                <li>Porções;</li>
                <li>Vinhos nacionais e importados;</li>
                <li>Cervejas nacionais e importadas;</li>
                <li>Sobremesas;</li>
                <li>Lanches;</li>
                <li>E muito mais!</li>
              </ol>
              <a href="{{ route('reader') }}" class="tm-more-button margin-top-30">Acessar Cardápio</a>
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
              <li><a href="{{ route('reader') }}">Cardápio</a></li>
              <li><a href="https://deliveryapp.neemo.com.br/delivery/990">Delivery</a></li>
              <!-- <li><a href="#">Blog</a></li>
              <li><a href="#">Our Services</a></li> -->
            </ul>
          </nav>
          <div class="col-lg-5 col-md-5 tm-footer-div">
            <img src="img/cafe-do-lado-logo.png" alt="Logo" class="tm-site-logo-footer">
            <!-- <h3 class="tm-footer-div-title">Sobre Nós</h3>
            <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
            <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p> -->
          </div>
          <div class="col-lg-4 col-md-4 tm-footer-div">
            <h3 class="tm-footer-div-title">Redes Sociais</h3>
            <p>Siga o Café do Lado nas nossas redes sociais e fique sempre por dentro das novidades.</p>
            <div class="tm-social-icons-container">
              <a href="https://www.facebook.com/cafedolado" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
              <!-- <a href="https://twitter.com/cafedolado" class="tm-social-icon"><i class="fa fa-twitter"></i></a> -->
              <a href="https://www.instagram.com/cafedolado/" class="tm-social-icon"><i class="fa fa-instagram"></i></a>
              <!-- <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a> -->
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
