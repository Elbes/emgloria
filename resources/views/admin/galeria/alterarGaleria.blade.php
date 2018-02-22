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
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/galeria/altera-galeria') }}" method="post">
                                    {{ csrf_field() }} 
                                        <input type="hidden" class="form-control" name="id_galeria" value="{{ $galeria->id_galeria  }}"> 
                                        <!-- <div class="form-group{{ $errors->has('imagem_nome') ? ' has-error' : '' }}">
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
	                                                <option value="{{ $galeria->tipo_imagem }}" selected="selected">{{ $galeria->tipo_imagem}}</option>
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
                                            <textarea class="form-control" name="obs_imagem" rows="3" placeholder="Alguma observação importante">{{ $galeria->obs_imagem}}</textarea>
                                            @if ($errors->has('obs_imagem'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('obs_imagem') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Imagem</label>
                                            <div><img style="width:200px; height:80px;" src="{{ url('/imagens/galeria') }}/{{ $galeria->nome_imagem}}" alt="" ></div>
                                        </div>
                                        <hr>

                                        <button type="submit" class="btn btn-default">Alterar</button>
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
  