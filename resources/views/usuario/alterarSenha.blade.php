@extends('admin.layoutAdmin')

	@section('content')
	
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alteração de senha</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Alterar Senha
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
		                            <form role="form" method="POST" action="{{ url('/usuario/alterar-senha') }}">
				                        {{ csrf_field() }}
										<input type="hidden" class="form-control" name="id_usuario" value="{{ $use->id_usuario }}"> 
				                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
				                            <label >Nome</label>
				                                <input id="nome" type="text" class="form-control" name="nome" value="{{ $use->nome }}" required disabled="disabled" >
				
				                                @if ($errors->has('nome'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('nome') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				
				                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				                            <label>Senha Atual</label>
				                                <input id="senha_atual" type="password" class="form-control" name="senha_atual" value="{{ old('senha') }}" required>
				
				                                @if ($errors->has('senha_atual'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('senha_atual') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('senha') ? ' has-error' : '' }}">
	                            			<label for="password">Nova Senha</label>
			
				                                <input id="password" type="password" class="form-control" name="nova_senha" required>
				                                @if ($errors->has('nova_senha'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('nova_senha') }}</strong>
				                                    </span>
				                                @endif
			                        	</div>

				                        <div class="form-group{{ $errors->has('confirme_senha') ? ' has-error' : '' }}">
				                            <label for="password-confirm" >Confirme a Nova senha</label>
				                                <input id="password-confirm" type="password" class="form-control" name="confirme_senha" required>
				
				                                @if ($errors->has('confirme_senha'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('confirme_senha') }}</strong>
				                                    </span>
				                                @endif
				                        </div>

				                         <button type="submit" class="btn btn-default">Alterar</button>
				                    </form>
                                   </div>     
                   				 </div>
                   			  </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@endsection