<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Seção</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('secaos.index') }}">Voltar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $secao->nome }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descrição Resumida:</strong>
            {{ $secao->descricao_resumida }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descrição Completa:</strong>
            {{ $secao->descricao_completa }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto:</strong>
            <img src="{{ $secao->foto_url }}" alt="">
        </div>
    </div>
</div>
