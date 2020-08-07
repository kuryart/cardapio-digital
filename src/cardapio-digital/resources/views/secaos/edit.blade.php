<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Seção</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('secaos.index') }}"> Back</a>
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

<form action="{{ route('secaos.update',$secao->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" value="{{ $secao->nome }}" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição Resumida:</strong>
                <textarea class="form-control" style="height:150px" name="descricao_resumida" placeholder="Descrição Resumida">{{ $secao->descricao_resumida }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição Completa:</strong>
                <textarea class="form-control" style="height:150px" name="descricao_completa" placeholder="Descrição Complet6a">{{ $secao->descricao_completa }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto:</strong>
                <input id="image" type="file" name="image" accept=".jpeg,.png,.jpg,.gif,.svg">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Ok</button>
        </div>
    </div>

</form>
