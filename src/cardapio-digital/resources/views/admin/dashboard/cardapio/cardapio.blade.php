<div class="main-div">
  <div class="accordion" id="cardapio-accordion">
    @foreach($secaos as $secao)
      <!-- Seção - BEGIN -->
      <div class="card secao-wrapper">
        <div class="card-header secao-header" id="{{ 'secao-header-'.$secao->id }}">
          <h2 class="mb-0">
            <div class="container-fluid secao-container">
              <div class="row align-items-center">
                <div class="col-auto">
                  <button class="btn btn-link secao-title" type="button" data-toggle="collapse" data-target="#{{ 'secao-collapse-'.$secao->id }}" aria-expanded="true" aria-controls="{{ 'secao-header-'.$secao->id }}">
                    {{ $secao->nome }}
                  </button>
                </div>
                <div class="col-auto">
                  <div class="dropdown">
                    <button class="btn btn-primary btn-sm py-0 dropdown-toggle btn-dropdown-menu-secao" type="button" id="secao-dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bars"></i>
                    </button>
                      <div class="dropdown-menu" aria-labelledby="secao-dropdown-menu">
                        <a class="dropdown-item add-secao-link" href="#" data-toggle="modal" data-target="#add-secao-modal"><i class="fas fa-layer-group"></i> Criar Nova Seção</a>
                        <a class="dropdown-item edit-secao-link" data-secao_id="{{ $secao->id }}" href="#" data-toggle="modal" data-target="#edit-secao-modal"><i class="fas fa-edit"></i> Editar Seção "{{ $secao->nome }}"</a>
                        <a class="dropdown-item delete-secao-link" data-secao_id="{{ $secao->id }}" href="#" data-toggle="modal" data-target="#delete-secao-modal"><i class="fas fa-trash-alt"></i> Excluir Seção "{{ $secao->nome }}"</a>
                        <hr class="my-4">
                        <a class="dropdown-item add-categoria-link" data-secao_id="{{ $secao->id }}" href="#" data-toggle="modal" data-target="#add-categoria-modal"><i class="fas fa-sitemap"></i> Adicionar Categoria à "{{ $secao->nome }}"</a>
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
                      <div class="container-fluid categoria-container">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <button class="btn btn-link menu-categoria" type="button" data-toggle="collapse" data-target="#{{ 'categoria-collapse-'.$categoria->id }}" aria-expanded="true" aria-controls="{{ 'categoria-header-'.$categoria->id }}">
                              {{ $categoria->nome }}
                            </button>
                          </div>
                          <div class="col-auto">
                            <div class="dropdown">
                              <button class="btn btn-primary btn-sm py-0 dropdown-toggle btn-dropdown-menu-categoria" type="button" id="categoria-dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <i class="fas fa-sitemap"></i> -->
                                <i class="fas fa-bars"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="categoria-dropdown-menu">
                                <a class="dropdown-item edit-categoria-link" data-categoria_id="{{ $categoria->id }}" data-secao_id="{{ $secao->id }}" href="#" data-toggle="modal" data-target="#edit-categoria-modal"><i class="fas fa-edit"></i> Editar Categoria "{{ $categoria->nome }}"</a>
                                <a class="dropdown-item delete-categoria-link" data-categoria_id="{{ $categoria->id }}" href="#" data-toggle="modal" data-target="#delete-categoria-modal"><i class="fas fa-trash-alt"></i> Excluir Categoria "{{ $categoria->nome }}"</a>
                                <hr class="my-4">
                                <a class="dropdown-item add-produto-link" data-categoria_id="{{ $categoria->id }}" href="#" data-toggle="modal" data-target="#add-produto-modal"><i class="fas fa-hamburger"></i> Adicionar Produto à "{{ $categoria->nome }}"</a>
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-hamburger"></i> Adicionar Produto à "{{ $categoria->nome }}"</a> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </h2>
                  </div>
                  <div id="{{ 'categoria-collapse-'.$categoria->id }}" class="collapse show collapse-cardapio-item" aria-labelledby="{{ 'categoria-header-'.$categoria->id }}" data-parent="#{{ 'secao-collapse-'.$secao->id }}">
                    <div class="card-body categoria-card-body">
                      @foreach ($produtos as $produto)
                        @if ($produto->categoria_id === $categoria->id)
                        <!-- Produto - BEGIN -->
                        <div class="container-fluid produto-container">
                          <div class="row produto-main-wrapper">
                            <div class="col produto-detalhes">
                              <div class="row produto-header">
                                <div class="col-auto produto-title-wrapper">
                                  <span class="produto-title">{{ $produto->nome }}</span>
                                </div>
                                <div class="col produto-menu-wrapper">
                                  <span class="produto-menu">
                                    <div class="dropdown">
                                      <button class="btn btn-primary btn-sm py-0 dropdown-toggle btn-dropdown-menu-produto" type="button" id="produto-dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                        <!-- <i class="fas fa-hamburger"></i> -->
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="produto-dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Editar Produto "{{ $produto->nome }}"</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Excluir Produto "{{ $produto->nome }}"</a>
                                      </div>
                                    </div>
                                  </span>
                                </div>
                              </div>
                              <div class="row produto-body">
                                <div class="col produto-descricao-wrapper">
                                  <span class="produto-descricao">{{ $produto->descricao }}</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto text-center produto-precos">
                              <div class="row produto-precos-legendas">
                                <div class="col produto-preco-legenda-wrapper">
                                  <span class="produto-preco-legenda">{{ $produto->precos[0]['legenda'] }}</span>
                                </div>
                                <div class="col produto-preco-legenda-wrapper">
                                  <span class="produto-preco-legenda">{{ $produto->precos[0]['legenda'] }}</span>
                                </div>
                                <div class="col produto-preco-legenda-wrapper">
                                  <span class="produto-preco-legenda">{{ $produto->precos[0]['legenda'] }}</span>
                                </div>
                              </div>
                              <div class="row produto-precos-valores">
                                <div class="col produto-preco-valor-wrapper">
                                  <span class="produto-preco-valor">{{ $produto->precos[0]['valor'] }}</span>
                                </div>
                                <div class="col produto-preco-valor-wrapper">
                                  <span class="produto-preco-valor">{{ $produto->precos[0]['valor'] }}</span>
                                </div>
                                <div class="col produto-preco-valor-wrapper">
                                  <span class="produto-preco-valor">{{ $produto->precos[0]['valor'] }}</span>
                                </div>
                              </div>
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
</div>

<!-- Expand/Collapse All Button -->
<button onclick="expandAll()" id="btn-expand-all" title="Expandir tudo"><i class="fa fa-plus"></i></button>
<button onclick="collapseAll()" id="btn-collapse-all" title="Recolher tudo"><i class="fa fa-minus"></i></button>

<!-- Modals -->
@include('admin.dashboard.cardapio.modals')
