@extends('admin.layoutAdmin')

	@section('content')
	
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Meus dados cadastrais</h1>
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
				
				                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				                            <label>E-Mail</label>
				                                <input id="email" type="email" class="form-control" name="email" value="{{ $use->email }}" required>
				
				                                @if ($errors->has('email'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('email') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('matricula') ? ' has-error' : '' }}">
				                            <label>Matricula</label>
				
				                                <input id="matricula" type="text" class="form-control" name="matricula" value="{{ $use->matricula }}" required>
				
				                                @if ($errors->has('matricula'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('matricula') }}</strong>
				                                    </span>
				                                @endif
				                        </div>
				                        
				                        <div class="form-group{{ $errors->has('lotacao') ? ' has-error' : '' }}">
				                            <label>Setor</label>
				                                <select class="form-control" id="id_setor" name="id_setor">
				                                <option selected="selected" value="{{$use->setor->id_setor}}">{{$use->setor->nome_setor}}</option>
				                                @foreach ($setores as $setor)
				                                	<option value="{{$setor->id_setor}}">{{$setor->nome_setor}}</option>
				                                @endforeach
				                                </select>
				                                @if ($errors->has('id_setor'))
				                                    <span class="help-block">
				                                        <strong>{{ $errors->first('id_setor') }}</strong>
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