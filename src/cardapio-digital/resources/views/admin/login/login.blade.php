@extends('admin.login.layout')

@section('content')
  <h2>Bem-vindo!</h2>
  <h5>Clique no link abaixo para entrar:</h5>

  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

  @if($errors->all())
    @foreach($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
    @endforeach
  @endif

  <div id="id01" class="modal">

    <form class="modal-content animate" action="{{ route('admin.login.do') }}" method="post">
      @csrf
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="{{url('/images/logo.png')}}" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Informe seu email" name="email" required>

        <label for="password"><b>Senha</b></label>
        <input type="password" placeholder="Informe sua senha" name="password" required>

        <button type="submit">Login</button>
        <!-- <label>
          <input type="checkbox" checked="checked" name="remember"> Lembrar de mim
        </label> -->
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="password">Esqueci minha <a href="#">senha</a></span>
      </div>
    </form>
  </div>
@endsection
