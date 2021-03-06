@extends('auth.app')

	@section('content')
		 <div class="container">
	         <div class="row">
	            <div class="col-md-4 col-md-offset-4">
	                <div class="login-panel panel panel-default">
	                @include('notificacao')
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Faça Login</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form role="form" action="{{ url('/entrar') }}" method="post">
                                    {{ csrf_field() }}
	                            <fieldset>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
	                                </div>
	                                <div class="form-group">
	                                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
	                                </div>
	                                <div class="form-group">
	                                    <label>
	                                       <a href="{{ url('/esqueceuSenha') }}" title="Clique para recuperar senha">Esqueceu a senha ?</a>
	                                    </label>
	                                </div>
	                                <!-- Change this to a button or input when using this as a form -->
	                                <button type="submit" class="btn btn-primary" title="Clique para acessar o sistema">Acessar</button>
	                                <a href="{{ url('/cadastro-usuario') }}" class="btn btn-primary" title="Clique para realizar o cadastro">Não tenho cadastro</a>
	                            </fieldset>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
    	</div>
	@endsection
 