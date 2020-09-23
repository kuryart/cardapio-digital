<nav class="navbar navbar-expand-md sticky-top main-menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
  </button>

    <div id="mainNav" class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item homeLink">
            <a class="nav-link" href="/">
              <span aria-hidden="true" class=" fa fa-spacer-right fa-home"></span>
            </a>
          </li>
          <li class="nav-item active">
            <a id="cardapio" class="nav-link" href="#cardapio">Cardápio</a>
          </li>
          <li class="nav-item">
            <a id="qrcode" class="nav-link" href="#qrcode">QR Codes</a>
          </li>
        </ul>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">

            <div class="nav-link nav-search">
              <span id="search-icon"><i class="fa fa-search"></i></span>
              <input type="text" id="search-bar" onkeyup="searchProduto()" placeholder="Buscar produtos.." title="Type in a name">
            </div>

          </li>
          <li class="nav-item">
            <a id="logout" class="nav-link" href="{{ route('admin.logout') }}">Sair</a>
          </li>
        </ul>
    </div>
</nav>
