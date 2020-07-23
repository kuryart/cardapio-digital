@extends('templates.template')

@section('content')
  <h1>Painel de Administração</h1>

  <a href="{{ route('admin.logout') }}">Logout</a>
@endsection
