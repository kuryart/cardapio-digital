@extends('error.layout')

@section('content')
  <div class="">
    <i class="fas fa-exclamation-triangle"></i>
    <h1>Ops! Algo saiu errado...</h1>
    <h3>Houve um erro ao processar a sua solicitação. Um relatório foi enviado para nossa equipe de programação e resolveremos o mais rápido possível. Adicionalmente, você pode entrar em contato por e-mail, se desejar.</h3>
    <button type="button" name="btn-email"><i class="fas fa-envelope"></i>ENVIAR EMAIL</button>
    <button type="button" name="btn-back"><i class="fas fa-caret-left"></i>VOLTAR</button>
  </div>
@endsection
