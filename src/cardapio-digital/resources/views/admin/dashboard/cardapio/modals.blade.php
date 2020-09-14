<!-- === Seção === -->
<!-- Add Seção Modal -->
<div class="modal fade" id="add-secao-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-secao-modal-label">Criar Seção</h5>
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
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Seção Modal -->
<div class="modal fade" id="edit-secao-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-secao-modal-label">Editar Seção</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form id="edit-secao-form" action="{{ route('secaos.update', '||z||') }}" method="POST">
          @csrf
          @method('PUT')

           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Delete Seção Modal -->
<div class="modal fade" id="delete-secao-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete-secao-modal-label">Excluir Seção</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
           <h4><strong>Atenção!</strong></h4>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
           <p>Esta ação irá excluir a seção e suas respectivas categorias e produtos. Deseja continuar?</p>
         </div>
        <!-- Form -->
        <form id="delete-secao-form" action="{{ route('secaos.destroy', '||z||') }}" method="POST">
          @csrf
          @method('DELETE')

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Excluir</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- === Categoria === -->
<!-- Add Categoria Modal -->
<div class="modal fade" id="add-categoria-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-categoria-modal-label">Criar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form action="{{ route('categorias.store') }}" method="POST">
          @csrf

           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 hide">
              <div class="form-group">
                <input class="form-control" id="add-categoria-input-secao-id" value="||z||" type="text" name="secao_id">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Categoria Modal -->
<div class="modal fade" id="edit-categoria-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-categoria-modal-label">Editar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form id="edit-categoria-form" action="{{ route('categorias.update', '||z||') }}" method="POST">
          @csrf
          @method('PUT')

           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Seção:</strong>
                    <select id="edit-categoria-form-select" name="secao_id" class="form-control">
                      @foreach ($secaos as $secao)
                        <option value="{{ $secao->id }}" selected="||z||">{{ $secao->nome }}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Delete Categoria Modal -->
<div class="modal fade" id="delete-categoria-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete-categoria-modal-label">Excluir Seção</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
           <h4><strong>Atenção!</strong></h4>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
           <p>Esta ação irá excluir a seção e suas respectivas categorias e produtos. Deseja continuar?</p>
         </div>
        <!-- Form -->
        <form id="delete-categoria-form" action="{{ route('categorias.destroy', '||z||') }}" method="POST">
          @csrf
          @method('DELETE')

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Excluir</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- === Categoria === -->
<!-- Add Produto Modal -->
<div class="modal fade" id="add-produto-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-produto-modal-label">Criar Produto</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <form id="add-produto-form" action="{{ route('produtos.store') }}" method="POST">
          @csrf
           <div><input type="text" name="a" value="1" id="a"></div>

           
           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 hide">
              <div class="form-group">
                <input class="form-control" id="add-produto-input-secao-id" value="||z||" type="text" name="categoria_id">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <!-- <button type="submit" class="btn btn-primary">Salvar</button> -->
              <button class="btn btn-primary" type="button" onclick="submitProdutoForm()">Salvar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
