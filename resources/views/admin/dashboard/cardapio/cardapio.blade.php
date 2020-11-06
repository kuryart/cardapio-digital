<div class="main-div">
  

  <div class="accordion" id="cardapio-accordion">
    @foreach($secaos as $secao)
      <!-- Seção - BEGIN -->
      <div class="card secao-wrapper">
        @if ($secao->id === 6 || $secao->id === 7)
          <div class="card-header secao-header-green" id="{{ 'secao-header-'.$secao->id }}">
        @elseif ($secao->id >= 1 && $secao->id <= 5)
          <div class="card-header secao-header-red" id="{{ 'secao-header-'.$secao->id }}">
        @elseif ($secao->id === 8)
          <div class="card-header secao-header-black" id="{{ 'secao-header-'.$secao->id }}">
        @elseif ($secao->id >= 9 && $secao->id <= 15)
          <div class="card-header secao-header-violet" id="{{ 'secao-header-'.$secao->id }}">
        @elseif ($secao->id === 16)
          <div class="card-header secao-header-beer" id="{{ 'secao-header-'.$secao->id }}">
        @else 
          <div class="card-header secao-header-default" id="{{ 'secao-header-'.$secao->id }}">
        @endif
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
          <div class="card-body secao-card-body">
            @foreach($categorias as $categoria)
              @if ($categoria->secao_id === $secao->id)
                <!-- Categoria - BEGIN -->
                <div class="card categoria-wrapper">
                  @if ($secao->id === 6 || $secao->id === 7)
                    <div class="card-header categoria-header-green" id="{{ 'categoria-header-'.$categoria->id }}">
                  @elseif ($secao->id >= 1 && $secao->id <= 5)                    
                    <div class="card-header categoria-header-red" id="{{ 'categoria-header-'.$categoria->id }}">
                  @elseif ($secao->id === 8)
                    <div class="card-header categoria-header-black" id="{{ 'categoria-header-'.$categoria->id }}">
                  @elseif ($secao->id >= 9 && $secao->id <= 15)
                    <div class="card-header categoria-header-violet" id="{{ 'categoria-header-'.$categoria->id }}">
                  @elseif ($secao->id === 16)
                    <div class="card-header categoria-header-beer" id="{{ 'categoria-header-'.$categoria->id }}">
                  @else 
                    <div class="card-header categoria-header-default" id="{{ 'categoria-header-'.$categoria->id }}">
                  @endif
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
                          @if (count($produto->precos) === 1)
                            <!-- Produto - BEGIN -->
                            <div class="container-fluid produto-container">
                              <div class="row produto-main-wrapper align-items-center">
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 produto-detalhes">
                                  <div class="row produto-header">
                                    <div class="col-auto produto-title-wrapper">
                                      <span class="produto-title">{{ $produto->nome }}</span>
                                    </div>
                                    <div class="col produto-menu-wrapper">
                                      <span class="produto-menu">
                                        <div class="dropdown">
                                          <button class="btn btn-primary btn-sm py-0 dropdown-toggle btn-dropdown-menu-produto" type="button" id="produto-dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bars"></i>
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="produto-dropdown-menu">
                                            <a class="dropdown-item edit-produto-link" data-produto_id="{{ $produto->id }}" data-categoria_id="{{ $categoria->id }}" href="#" data-toggle="modal" data-target="#edit-produto-modal"><i class="fas fa-edit"></i> Editar Produto "{{ $produto->nome }}"</a>
                                            <a class="dropdown-item delete-produto-link" data-produto_id="{{ $produto->id }}" href="#" data-toggle="modal" data-target="#delete-produto-modal"><i class="fas fa-trash-alt"></i> Excluir Produto "{{ $produto->nome }}"</a>
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

                                <!-- <div class="col-10 col-sm-10 produto-preco-column-adjust">

                                </div> -->

                                <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 produto-precos">

                                </div>


                                @foreach ($produto->precos as $preco)
                                  <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 produto-precos">
                                    <div class="row justify-content-center">
                                      <div class="col">
                                        <span class="produto-preco-legenda">{{ $preco['legenda'] }}</span>
                                      </div>
                                    </div>
                                    <div class="row justify-content-center">
                                      <div class="col">
                                        <span class="produto-preco-valor">{{ $preco['valor'] }}</span>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach


                                  <!-- <div class="row justify-content-right">
                                    @foreach ($produto->precos as $preco)
                                      <div class="col">
                                        <div class="row justify-content-center">
                                          <div class="col">
                                            <span class="">Legenda1</span>
                                          </div>
                                        </div>
                                        <div class="row justify-content-center">
                                          <div class="col">
                                            <span class="">Valor1</span>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                  </div> -->

                                  <!-- <div class="row produto-precos-legendas justify-content-center">
                                    @foreach ($produto->precos as $preco)
                                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 produto-preco-legenda-wrapper">
                                        <span class="produto-preco-legenda">{{ $preco['legenda'] }}</span>
                                      </div>
                                    @endforeach
                                  </div>
                                  <div class="row produto-precos-valores justify-content-center">
                                    @foreach ($produto->precos as $preco)
                                      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 produto-preco-legenda-wrapper">
                                        <span class="produto-preco-valor">{{ $preco['valor'] }}</span>
                                      </div>
                                    @endforeach
                                  </div> -->


                              </div>
                            </div>
                            <!-- Produto - END -->
                          @elseif (count($produto->precos) === 2)
                            <!-- Produto - BEGIN -->
                            <div class="container-fluid produto-container">
                              <div class="row produto-main-wrapper">
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 produto-detalhes">
                                  <div class="row produto-header">
                                    <div class="col-auto produto-title-wrapper">
                                      <span class="produto-title">{{ $produto->nome }}</span>
                                    </div>
                                    <div class="col produto-menu-wrapper">
                                      <span class="produto-menu">
                                        <div class="dropdown">
                                          <button class="btn btn-primary btn-sm py-0 dropdown-toggle btn-dropdown-menu-produto" type="button" id="produto-dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bars"></i>
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="produto-dropdown-menu">
                                            <a class="dropdown-item edit-produto-link" data-produto_id="{{ $produto->id }}" data-categoria_id="{{ $categoria->id }}" href="#" data-toggle="modal" data-target="#edit-produto-modal"><i class="fas fa-edit"></i> Editar Produto "{{ $produto->nome }}"</a>
                                            <a class="dropdown-item delete-produto-link" data-produto_id="{{ $produto->id }}" href="#" data-toggle="modal" data-target="#delete-produto-modal"><i class="fas fa-trash-alt"></i> Excluir Produto "{{ $produto->nome }}"</a>
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

                                <!-- <div class="col-8 col-sm-8 produto-preco-column-adjust">

                                </div> -->

                                @foreach ($produto->precos as $preco)
                                  <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 produto-precos">
                                    <div class="row justify-content-center">
                                      <div class="col">
                                        <span class="produto-preco-legenda">{{ $preco['legenda'] }}</span>
                                      </div>
                                    </div>
                                    <div class="row justify-content-center">
                                      <div class="col">
                                        <span class="produto-preco-valor">{{ $preco['valor'] }}</span>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach




                                  <!-- <div class="row justify-content-right">
                                    @foreach ($produto->precos as $preco)
                                      <div class="col">
                                        <div class="row justify-content-center">
                                          <div class="col">
                                            <span class="">Legenda1</span>
                                          </div>
                                        </div>
                                        <div class="row justify-content-center">
                                          <div class="col">
                                            <span class="">Valor1</span>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                  </div> -->

                                  <!-- <div class="row produto-precos-legendas justify-content-center no-gutters">
                                    @foreach ($produto->precos as $preco)
                                      <div class="col-3 col-sm-3 col-md col-lg col-xl produto-preco-legenda-wrapper">
                                        <span class="produto-preco-legenda">{{ $preco['legenda'] }}</span>
                                      </div>
                                    @endforeach
                                  </div>
                                  <div class="row produto-precos-valores justify-content-center no-gutters">
                                    @foreach ($produto->precos as $preco)
                                      <div class="col-3 col-sm-3 col-md col-lg col-xl produto-preco-legenda-wrapper">
                                        <span class="produto-preco-valor">{{ $preco['valor'] }}</span>
                                      </div>
                                    @endforeach
                                  </div> -->

                              </div>
                            </div>
                            <!-- Produto - END -->
                          @elseif (count($produto->precos) === 3)
                            <!-- Produto - BEGIN -->
                            <div class="container-fluid produto-container">
                              <div class="row produto-main-wrapper">
                                <div class="col-12 col-sm-12 col-md-9	col-lg-9 col-xl-9 produto-detalhes">
                                  <div class="row produto-header">
                                    <div class="col-auto produto-title-wrapper">
                                      <span class="produto-title">{{ $produto->nome }}</span>
                                    </div>
                                    <div class="col produto-menu-wrapper">
                                      <span class="produto-menu">
                                        <div class="dropdown">
                                          <button class="btn btn-primary btn-sm py-0 dropdown-toggle btn-dropdown-menu-produto" type="button" id="produto-dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bars"></i>
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="produto-dropdown-menu">
                                            <a class="dropdown-item edit-produto-link" data-produto_id="{{ $produto->id }}" data-categoria_id="{{ $categoria->id }}" href="#" data-toggle="modal" data-target="#edit-produto-modal"><i class="fas fa-edit"></i> Editar Produto "{{ $produto->nome }}"</a>
                                            <a class="dropdown-item delete-produto-link" data-produto_id="{{ $produto->id }}" href="#" data-toggle="modal" data-target="#delete-produto-modal"><i class="fas fa-trash-alt"></i> Excluir Produto "{{ $produto->nome }}"</a>
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

                                @foreach ($produto->precos as $preco)
                                  <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 produto-precos">
                                    <div class="row justify-content-center">
                                      <div class="col">
                                        <span class="">Legenda1</span>
                                      </div>
                                    </div>
                                    <div class="row justify-content-center">
                                      <div class="col">
                                        <span class="">Valor1</span>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach

                                <!-- <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 produto-precos">
                                  <div class="row produto-precos-legendas justify-content-center">
                                    @foreach ($produto->precos as $preco)
                                      <div class="col-3 col-sm-3 col-md col-lg col-xl produto-preco-legenda-wrapper">
                                        <span class="produto-preco-legenda">{{ $preco['legenda'] }}</span>
                                      </div>
                                    @endforeach
                                  </div>
                                  <div class="row produto-precos-valores justify-content-center">
                                    @foreach ($produto->precos as $preco)
                                      <div class="col-3 col-sm-3 col-md col-lg col-xl produto-preco-legenda-wrapper">
                                        <span class="produto-preco-valor">{{ $preco['valor'] }}</span>
                                      </div>
                                    @endforeach
                                  </div>
                                </div> -->
                              </div>
                            </div>
                            <!-- Produto - END -->
                          @endif
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
