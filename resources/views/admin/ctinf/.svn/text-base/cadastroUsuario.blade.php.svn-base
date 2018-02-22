
@extends('admin.layoutAdmin')

	@section('content')
	
	 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Usuario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações do usuário
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" role="form" method="POST" action="{{ route('cadastroUsuario') }}">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			                            	<label for="name" >Nome usuário</label>
			                                	<input id="name" type="text" class="form-control" name="name" placeholder="Entre com o número de dias de validade" value="{{ old('name') }}" required autofocus>
			
			                                	@if ($errors->has('name'))
			                                    	<span class="help-block">
			                                       		<strong>{{ $errors->first('name') }}</strong>
			                                    	</span>
			                                	@endif
			                        	</div>
			
				                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				                            <label for="email">E-Mail</label>
				                                <input id="email" type="email" class="form-control" name="email" placeholder="Entre com o e-mail do usuário"  value="{{ old('email') }}" required>
				
				                                @if ($errors->has('email'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('email') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				
				                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				                            <label for="password">Senha</label>
				                                <input id="password" type="password" class="form-control" name="password" required>
				
				                                @if ($errors->has('password'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('password') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				
				                        <div class="form-group">
				                            <label for="password-confirm">Confirma senha</label>
				                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				                        </div> 

                                        <button type="submit" class="btn btn-default">Cadastrar</button>
                                        <button type="reset" class="btn btn-default">Limpar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
   @endsection
