<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Produto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops!</strong> Houve um problema com sua solicitação.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('produtos.update',$produto->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição">{{ $produto->descricao }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria:</strong>
                <select name="categoria_id" class="form-control">
                  @foreach ($categorias as $categoria)
                    @if ($categoria->id === $categoria->categoria_id)
                      <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
                    @else
                      <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endif
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto Atual:</strong>
                <img src="{{ $produto->foto_url }}">
                <strong>Nova Foto:</strong>
                <input type="file" name="image" accept=".jpeg,.png,.jpg,.gif,.svg" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Ok</button>
        </div>
    </div>

</form>
