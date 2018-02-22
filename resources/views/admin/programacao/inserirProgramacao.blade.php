@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inserir Programação</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações da Programação
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" action="{{ url('/admin/programacao/inserir-programacao') }}" method="post">
                                    {{ csrf_field() }} 
                                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id_usuario }}"> 
                                       <!--  <div class="form-group{{ $errors->has('imagem_nome') ? ' has-error' : '' }}">
                                            <label>Nome da Imagem</label>
                                            <input class="form-control" name="imagem_nome" placeholder="Entre com o nome da Imagem" value="{{ old('imagem_nome') }}" required="required">
                                        	@if ($errors->has('imagem_nome'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('imagem_nome') }}</strong>
                                                </span>
                                            @endif
                                        </div> -->
                                        <div class="form-group{{ $errors->has('tipo_imagem') ? ' has-error' : '' }}">
                                            <label>Dia da Semana</label>
                                            <label for="dia_programacao">
	                                            <select class="form-control" name="tipo_imagem" id="tipo_imagem">
	                                            	<option value="Domingo">Domingo</option>
												    <option value="Segunda-Feira">Segunda-Feira</option>
												    <option value="Terça-Feira">Terça-Feira</option>
												    <option value="Quarta-Feira">Quarta-Feira</option>
												    <option value="Quinta-Feira">Quinta-Feira</option>
												    <option value="Sexta-Feira">Sexta-Feira</option>
												    <option value="Sábado">Sábado</option>
												 </select>
                                            </label>
                                            @if ($errors->has('tipo_imagem'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('tipo_imagem') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('obs_imagem') ? ' has-error' : '' }}">
                                            <label>Observação</label>
                                            <textarea class="form-control" name="obs_imagem" rows="3" placeholder="Alguma observação importante">{{ old('obs_imagem') }}</textarea>
                                            @if ($errors->has('obs_imagem'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('obs_imagem') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Imagem</label>
                                            <input type="file" name="imagem_galeria" required="required">
                                            <input type="hidden" id="nome_imagem" name="nome_imagem">
                                        </div>

                                        <button type="submit" class="btn btn-default">Inserir</button>
                                        <a class="btn btn-default" href="{{ url('/listaGaleria') }}" >Cancelar</a>
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
   @endsection
  