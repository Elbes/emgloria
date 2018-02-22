@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inserir Imagens para galeria</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações da imagem
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/galeria/inserir-galeria') }}" method="post">
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
                                            <label>Tipo</label>
                                            <label for="tipo_imagem">
	                                            <select class="form-control" name="tipo_imagem" id="tipo_imagem">
												    <option value="Geral">Geral</option>
												    <option value="Amor que move">Amor que move</option>
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
  