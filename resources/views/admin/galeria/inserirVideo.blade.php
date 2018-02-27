@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inserir Vídeos para galeria</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações do vídeo
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/galeria/inserir-video') }}" method="post">
                                    {{ csrf_field() }} 
                                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id_usuario }}"> 
                                 
                                        <div class="form-group{{ $errors->has('tipo_video') ? ' has-error' : '' }}">
                                            <label>Tipo</label>
                                            <label for="tipo_imagem">
	                                            <select class="form-control" name="tipo_video" id="tipo_video">
												    <option value="Geral">Geral</option>
												    <option value="Amor que move">Amor que move</option>
												 </select>
                                            </label>
                                            @if ($errors->has('tipo_video'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('tipo_video') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('obs_video') ? ' has-error' : '' }}">
                                            <label>Observação</label>
                                            <textarea class="form-control" name="obs_video" rows="3" placeholder="Alguma observação importante">{{ old('obs_video') }}</textarea>
                                            @if ($errors->has('obs_video'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('obs_video') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Vídeo</label>
                                            <input type="file" name="nome_video" required="required">
<!--                                             <input type="hidden" id="nome_imagem" name="nome_imagem"> -->
                                        </div>

                                        <button type="submit" class="btn btn-default">Inserir</button>
                                        <a class="btn btn-default" href="{{ url('/listaVideo') }}" >Cancelar</a>
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
  