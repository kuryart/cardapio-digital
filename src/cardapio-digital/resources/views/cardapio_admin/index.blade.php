<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
</header>

<!-- <div class="container-fluid">
  <div class="row align-items-center justify-content-center">
    <div id="cardapio-header" class="card card-image col-md-12">

    </div>

    <div id="cardapio-title" class="col-sm-auto">
      <h1>Cardápio</h1>
    </div>
    <div id="div-btn-add-secao" class="col-sm-auto">
      <button id="btn-add-secao" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add-secao-modal" data-tooltip="tooltip" data-placement="bottom" title="Nova Seção">
        <i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
</div> -->

<!-- Nova Seção Modal -->
<div class="modal fade" id="add-secao-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar Seção</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form action="{{ route('secaos.store') }}" method="POST">
          @csrf

           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Descrição</strong>
                <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição"></textarea>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Accordion do cardápio -->
<div class="accordion" id="cardapio-accordion">
  @foreach($secaos as $secao)
    <!-- Card Seção -->
    <div class="card">
      <!-- Seção Header-->
      <div class="card-header" id="{{ 'secao-heading-'.$secao->id }}">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#{{ 'secao-collapsible-'.$secao->id }}">
            {{ $secao->nome }}
          </button>
        </h2>
      </div>
      <!-- Seção Conteúdo-->
      <div id="{{ 'secao-collapsible-'.$secao->id }}" class="collapse show" data-parent="#cardapio-accordion">
        <div class="card-body">
          @foreach($categorias as $categoria)
            @if ($categoria->secao_id === $secao->id)
              <!-- Card Categoria -->
              <div class="card">
                <!-- Categoria Header -->
                <div class="card-header" id="{{ 'categoria-heading-'.$categoria->id }}">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#{{ 'categoria-collapsible-'.$categoria->id }}">
                      {{ $categoria->nome }}
                    </button>
                  </h2>
                </div>
                <!-- Categoria Conteúdo-->
                <div id="{{ 'categoria-collapsible-'.$categoria->id }}" class="collapse show" data-parent="#{{ 'secao-collapsible-'.$secao->id }}">
                  <div class="card-body">
                    @foreach ($produtos as $produto)
                      @if ($produto->categoria_id === $categoria->id)
                        <!-- Card Produto-->
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="{{ $produto->foto_url }}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body card-body-produto">
                                <h5 class="card-title">{{ $produto->nome }}</h5>
                                <p class="card-text">{{ $produto->descricao }}</p>
                                <p class="card-text"><small class="text-muted">R$ 5,00</small></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endif
                      @endforeach
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  @endforeach
</div>
