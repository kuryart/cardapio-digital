<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Categorias</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('categorias.create') }}">Criar nova categoria</a>
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
        <th>Seção</th>
        <th width="280px">Ação</th>
    </tr>
    @foreach ($categorias as $categoria)

    <tr>
        <td>{{ $categoria->id }}</td>
        <td>{{ $categoria->nome }}</td>
        <td>{{ $categoria->descricao }}</td>
        <td>{{ $categoria->secao->nome }}</td>
        <td>
            <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('categorias.show',$categoria->id) }}">Ver</a>

                <a class="btn btn-primary" href="{{ route('categorias.edit',$categoria->id) }}">Editar</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $categorias->links() !!}
