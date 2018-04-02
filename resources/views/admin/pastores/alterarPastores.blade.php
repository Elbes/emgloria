@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inserir Pastor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações do Pastor
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/pastores/altera-pastores') }}" method="post">
                                    {{ csrf_field() }} 
                                        <input type="hidden" class="form-control" name="id_pastor" value="{{ $pastor->id_pastor}}"> 
                                       
                                        <div class="form-group{{ $errors->has('tipo_imagem') ? ' has-error' : '' }}">
                                            <label>Nome</label>
	                                        <input class="form-control" name="nome_pastor" maxlength="150" placeholder="Entre com o nome do pastor" value="{{ $pastor->nome_pastor }}" required="required">
                                            @if ($errors->has('nome_pastor'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nome_pastor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('funcao_pastor') ? ' has-error' : '' }}">
                                            <label>Função/Posição do Pastor</label>
	                                        <input class="form-control" name="funcao_pastor" maxlength="100" placeholder="Entre com a função do pastor" value="{{ $pastor->funcao_pastor }}" required="required">
                                            @if ($errors->has('funcao_pastor'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('funcao_pastor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('obs_pastor') ? ' has-error' : '' }}">
                                            <label>Observação</label>
                                            <textarea class="form-control" name="obs_pastor" rows="3" placeholder="Alguma observação importante / Texto sobre o Pastor">{{ $pastor->obs_pastor }}</textarea>
                                            @if ($errors->has('obs_pastor'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('obs_pastor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Foto Atual</label>
                                            <img alt="" src="{{url('/imagens/pastores/')}}/{{$pastor->foto_pastor}}">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Foto para perfil</label>
                                            <input type="hidden" name="foto_pastor_antiga" value="{{$pastor->foto_pastor}}">
                                            <input type="file" name="foto_pastor_nova">
                                        </div>

                                        <button type="submit" class="btn btn-default">Alterar</button>
                                        <a class="btn btn-default" href="{{ url('/listaPastores') }}" >Cancelar</a>
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
  