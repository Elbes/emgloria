@extends('admin.layoutAdmin')

	@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Vídeos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações do vídeo para tela inicial
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/ctinf/alterar-video') }}" method="post">
                                    {{ csrf_field() }} 
                                       <input type="hidden" class="form-control" name="id_video" value="{{ $video->id_video }}"> 
                                        <div class="form-group{{ $errors->has('video_nome') ? ' has-error' : '' }}">
                                            <label>Nome do Vídeo</label>
                                            <input class="form-control" name="video_nome" placeholder="Entre com o nome do Vídeo" value="{{ $video->video_nome }}" required="required">
                                        	@if ($errors->has('video_nome'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('video_nome') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('video_descricao') ? ' has-error' : '' }}">
                                            <label>Descrição do Vídeo</label>
                                            <input class="form-control" name="video_descricao" placeholder="Entre com a descrição do vídeo" value="{{ $video->video_descricao }}" required="required">
                                        	@if ($errors->has('video_descricao'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('video_descricao') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <button type="submit" class="btn btn-default">Alterar</button>
                                        <a class="btn btn-default"  href="{{ url('/inserirVideo') }}" >Cancelar</a>
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
            <!-- /.col-lg-12 -->
    
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
   @endsection

   