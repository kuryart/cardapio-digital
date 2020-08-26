<div class="title-header">
  <h1>Cardápio</h1>
</div>

<!-- Accordion do cardápio -->
<div class="accordion" id="cardapio-accordion">
  @foreach($secaos as $secao)
    <!-- Card Seção -->
    <div class="card">
      <!-- Seção Header-->
      <div class="card-header" id="{{ 'secao-heading-'.$secao->id }}">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#{{ 'secao-collapsible-'.$secao->id }}">
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
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#{{ 'categoria-collapsible-'.$categoria->id }}">
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
                              <div class="card-body">
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
