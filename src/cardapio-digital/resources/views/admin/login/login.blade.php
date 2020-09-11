@extends('admin.login.layout')

@section('content')

	@if($errors->all())
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role="alert">
				{{ $error }}
			</div>
		@endforeach
	@endif

	<div class="login-form">
	    <form action="{{ route('admin.login.do') }}" method="post">
				@csrf
	        <h2 class="text-center">Login</h2>
	        <div class="form-group">
	            <input type="text" class="form-control" placeholder="Email" name="email" required="required">
	        </div>
	        <div class="form-group">
	            <input type="password" class="form-control" placeholder="Senha" name="password" required="required">
	        </div>
	        <div class="form-group">
	            <button type="submit" class="btn btn-primary btn-block">Login</button>
	        </div>
	        <div class="clearfix">
	            <label class="pull-left checkbox-inline"><input type="checkbox">Lembrar-me</label>
	            <a href="#" class="pull-right">Esqueci minha senha</a>
	        </div>
	    </form>
	    <p class="text-center"><a href="#">Nova conta</a></p>
	</div>
@endsection
