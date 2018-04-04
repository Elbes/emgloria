@extends('admin.layoutAdmin')

	@section('content')
	
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de Usuários Cadastrados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Usuário
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
		                            <form role="form" method="POST" action="{{ url('/usuario/alterar-usuario') }}">
				                        {{ csrf_field() }}
										<input type="hidden" class="form-control" name="id_usuario" value="{{ $use->id_usuario }}"> 
				                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
				                            <label >Nome</label>
				                                <input id="nome" type="text" class="form-control" name="nome" value="{{ $use->nome }}" required >
				
				                                @if ($errors->has('nome'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('nome') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
				                            <label>Telefone</label>
				
				                                <input id="telefone" type="text" class="form-control" name="telefone" value="{{ $use->telefone }}" required>
				
				                                @if ($errors->has('telefone'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('telefone') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				
				                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				                            <label>E-Mail</label>
				                                <input id="email" type="email" class="form-control" name="email" value="{{ $use->email }}" required>
				
				                                @if ($errors->has('email'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('email') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				                        
				                        
				                        
				                        <div class="form-group{{ $errors->has('id_perfil') ? ' has-error' : '' }}">
				                            <label>Perfil</label>
				                                <select class="form-control" id="id_perfil" name="id_perfil">
				                                <option selected="selected" value="{{$use->perfil->id_perfil}}">{{$use->perfil->nome_perfil}}</option>
				                                @foreach ($perfis as $perfil)
				                                	<option value="{{$perfil->id_perfil}}">{{$perfil->nome_perfil}}</option>
				                                @endforeach
				                                </select>
				                                @if ($errors->has('id_perfil'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('id_perfil') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
		
				                         <button type="submit" class="btn btn-default">Alterar</button>
                                        <a class="btn btn-default"  href="{{ url('/listaUsuario') }}" >Cancelar</a>
				                    </form>
                                   </div>     
                   				 </div>
                   			  </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                    <!-- /.panel -->
                </div>
                <!-- /.row -->
@endsection