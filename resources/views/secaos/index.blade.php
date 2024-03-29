<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Seções</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('secaos.create') }}">Criar Nova Seção</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($secaos as $secao)
    <tr>
        <td>{{ $secao->id }}</td>
        <td>{{ $secao->nome }}</td>
        <td>{{ $secao->descricao }}</td>
        <td>
            <form action="{{ route('secaos.destroy',$secao->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('secaos.show',$secao->id) }}">Ver</a>

                <a class="btn btn-primary" href="{{ route('secaos.edit',$secao->id) }}">Editar</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $secaos->links() !!}
