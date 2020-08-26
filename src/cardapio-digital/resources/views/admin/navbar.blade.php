<!-- <div class="m1 menu">
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
</div> -->

<!-- <nav class="navbar sticky-top navbar-dark bg-dark">
  <a id="cardapio" class="navbar-brand" href="#cardapio">Cardápio</a>
  <a id="qrcode" class="navbar-brand" href="#qrcode">QR Codes</a>
</nav> -->

<nav class="navbar navbar-expand-md sticky-top main-menu">
  <!-- <a href="#" class="navbar-brand order-md-last order-0">BSB Feedback</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse" id="mainNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item homeLink">
        <a class="nav-link" href="/">
          <span aria-hidden="true" class=" fa fa-spacer-right fa-home"></span>
        </a>
      </li>
      <li class="nav-item active">
        <a id="cardapio" class="nav-link" href="#cardapio">Cardápio</a>
      </li>
      <li class="nav-item ">
        <a id="qrcode" class="nav-link" href="#qrcode">QR Codes</a>
      </li>
    </ul>
  </div>
</nav>
