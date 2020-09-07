<div class="accordion" id="cardapio-accordion">
  @foreach($secaos as $secao)
    <!-- Seção - BEGIN -->
    <div class="card secao-wrapper">
      <div class="card-header secao-header" id="{{ 'secao-header-'.$secao->id }}">
        <h2 class="mb-0">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-11">
                <button class="btn btn-link menu-secao" type="button" data-toggle="collapse" data-target="#{{ 'secao-collapse-'.$secao->id }}" aria-expanded="true" aria-controls="{{ 'secao-header-'.$secao->id }}">
                  {{ $secao->nome }}
                </button>
              </div>
              <div class="col-1">
                <div class="dropdown">
                  <button class="btn btn-primary" type="button" id="secao-dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="secao-dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </h2>
      </div>
      <div id="{{ 'secao-collapse-'.$secao->id }}" class="collapse show collapse-cardapio-item" aria-labelledby="{{ 'secao-header-'.$secao->id }}" data-parent="#cardapio-accordion">
        <div class="card-body">
          @foreach($categorias as $categoria)
            @if ($categoria->secao_id === $secao->id)
              <!-- Categoria - BEGIN -->
              <div class="card categoria-wrapper">
                <div class="card-header categoria-header" id="{{ 'categoria-header-'.$categoria->id }}">
                  <h2 class="mb-0">
                    <div class="container-fluid">
                      <div class="row align-items-center">
                        <div class="col-11">
                          <button class="btn btn-link menu-categoria" type="button" data-toggle="collapse" data-target="#{{ 'categoria-collapse-'.$categoria->id }}" aria-expanded="true" aria-controls="{{ 'categoria-header-'.$categoria->id }}">
                            {{ $categoria->nome }}
                          </button>
                        </div>
                        <div class="col-1">
                          <div class="dropdown">
                            <button class="btn btn-primary" type="button" id="categoria-dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="categoria-dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </h2>
                </div>
                <div id="{{ 'categoria-collapse-'.$categoria->id }}" class="collapse show collapse-cardapio-item" aria-labelledby="{{ 'categoria-header-'.$categoria->id }}" data-parent="#{{ 'secao-collapse-'.$secao->id }}">
                  <div class="card-body">
                    @foreach ($produtos as $produto)
                      @if ($produto->categoria_id === $categoria->id)
                        <!-- Produto - BEGIN -->
                        <div class="container-fluid produto-container">
                          <div class="row align-items-center">
                            <div class="col-9 col-sm-10 col-md-10 col-lg-11">
                              <div class="row">
                                <div class="col-sm">
                                  <span class="produto-title menu-produto">{{ $produto->nome }}</span>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm">
                                  <span class="produto-description">{{ $produto->descricao }}</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-3 col-sm-2 col-md-2 col-lg-1">
                              <span class="produto-price float-right">27,40</span>
                            </div>
                          </div>
                        </div>
                        <!-- Produto - END -->
                        @endif
                      @endforeach
                  </div>
                </div>
              </div>
              <!-- Categoria - END -->
              @endif
            @endforeach
        </div>
      </div>
    </div>
    <!-- Seção - END -->

  @endforeach
</div>

<!-- Expand/Collapse All Button -->
<button onclick="expandAll()" id="btn-expand-all" title="Expandir tudo"><i class="fa fa-plus"></i></button>
<button onclick="collapseAll()" id="btn-collapse-all" title="Recolher tudo"><i class="fa fa-minus"></i></button>

<!-- Botões que ativam as Modals -->
<button id="btn-add-secao" type="button" class="btn" data-toggle="modal" data-target="#add-secao-modal"style="display: none;">
</button>
<button id="btn-add-categoria" type="button" class="btn" data-toggle="modal" data-target="#add-categoria-modal"style="display: none;">
</button>
<button id="btn-add-produto" type="button" class="btn" data-toggle="modal" data-target="#add-produto-modal"style="display: none;">
</button>

<!-- Modals -->
@include('admin.dashboard.cardapio.modals')
