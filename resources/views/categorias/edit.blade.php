<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Categoria</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> Voltar</a>
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

<form action="{{ route('categorias.update',$categoria->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" value="{{ $categoria->nome }}" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição">{{ $categoria->descricao }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Seção:</strong>
                <select name="secao_id" class="form-control">
                  @foreach ($secaos as $secao)
                    @if ($secao->id === $categoria->secao_id)
                      <option value="{{ $secao->id }}" selected>{{ $secao->nome }}</option>
                    @else
                      <option value="{{ $secao->id }}">{{ $secao->nome }}</option>
                    @endif
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Ok</button>
        </div>
    </div>

</form>
