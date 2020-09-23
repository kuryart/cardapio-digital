<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Produto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produtos.index') }}">Voltar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $produto->nome }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descrição:</strong>
            {{ $produto->descricao }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Categoria:</strong>
            {{ $produto->categoria->nome }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto:</strong>
            <img src="{{ $produto->foto_url }}">
        </div>
    </div>
</div>
