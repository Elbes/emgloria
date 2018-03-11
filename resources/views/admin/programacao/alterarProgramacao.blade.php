@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alterar Programação</h1>
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
                                    <form role="form" action="{{ url('/admin/programacao/altera-programacao') }}" method="post">
                                    {{ csrf_field() }} 
                                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id_usuario }}"> 
                                        <input type="hidden" class="form-control" name="id_programacao" value="{{ $programacao->id_programacao }}"> 
                                        
                                        <div class="form-group{{ $errors->has('dia_programacao') ? ' has-error' : '' }}">
                                            <label>Dia da Semana</label>
                                            <label for="dia_programacao">
	                                            <select class="form-control" name="dia_programacao" id="dia_programacao">
	                                            	<option value="{{ $programacao->dia_programacao }}">{{ $programacao->dia_programacao }}</option>
	                                            	<option value="Domingo">Domingo</option>
												    <option value="Segunda-Feira">Segunda-Feira</option>
												    <option value="Terça-Feira">Terça-Feira</option>
												    <option value="Quarta-Feira">Quarta-Feira</option>
												    <option value="Quinta-Feira">Quinta-Feira</option>
												    <option value="Sexta-Feira">Sexta-Feira</option>
												    <option value="Sábado">Sábado</option>
												 </select>
                                            </label>
                                            @if ($errors->has('dia_programacao'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('dia_programacao') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group{{ $errors->has('hora_programacao') ? ' has-error' : '' }}">
                                            <label>Hora</label>
                                            <input type="time" class="form-control" name="hora_programacao" maxlength="5" placeholder="Entre com a hora da programação" value="{{ $programacao->hora_programacao }}" required="required">
                                        	@if ($errors->has('hora_programacao'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('hora_programacao') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group{{ $errors->has('texto_programacao') ? ' has-error' : '' }}">
                                            <label>Programação</label>
                                            <input class="form-control" name="texto_programacao" maxlength="150" placeholder="Entre com o texto da programação" value="{{ $programacao->texto_programacao }}" required="required">
                                        	@if ($errors->has('texto_programacao'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('texto_programacao') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                         <div class="form-group{{ $errors->has('prioridade') ? ' has-error' : '' }}">
                                            <label>Dia da Semana</label>
                                            <label for="prioridade">
	                                            <select class="form-control" name="prioridade" id="prioridade">
												    <option value="{{ $programacao->prioridade }}">{{ $programacao->prioridade }}</option>
												    <option value="1">1</option>
												    <option value="2">2</option>
												    <option value="3">3</option>
												    <option value="4">4</option>
												    <option value="5">5</option>
												    <option value="6">6</option>
												    <option value="7">7</option>
												    <option value="8">8</option>
												    <option value="9">9</option>
												    <option value="10">10</option>
												 </select>
                                            </label>
                                            @if ($errors->has('prioridade'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('prioridade') }}</strong>
                                                </span>
                                            @endif
                                        </div>
        
                                        <button type="submit" class="btn btn-default">Alterar</button>
                                        <a class="btn btn-default" href="{{ url('/listaProgramacao') }}" >Cancelar</a>
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
  