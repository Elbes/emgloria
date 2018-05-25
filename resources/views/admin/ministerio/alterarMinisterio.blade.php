@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alteraçao de Dados do Ministério  - <b>{{ $ministerio->nome_ministerio }}</b></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações do Ministério
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/ministerio/altera-ministerio') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id_usuario }}">
                                        <input type="hidden" class="form-control" name="id_ministerio" value="{{ $ministerio->id_ministerio }}"> 
                                        <div class="form-group{{ $errors->has('nome_ministerio') ? ' has-error' : '' }}">
                                            <label>Nome do Ministério</label>
                                            <input class="form-control" name="nome_ministerio" placeholder="Entre com o nome do Ministério" value="{{ $ministerio->nome_ministerio }}" required="required">
                                        	@if ($errors->has('nome_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nome_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('texto_ministerio') ? ' has-error' : '' }}">
                                            <label>Texto do Minsitério</label>
                                            <textarea class="ckeditor" name="texto_ministerio" rows="7" required placeholder="Entre com o texto do Ministério">{{ $ministerio->texto_ministerio }}</textarea>
                                            @if ($errors->has('texto_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('texto_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group{{ $errors->has('obs_ministerio') ? ' has-error' : '' }}">
                                            <label>Observação</label>
                                            <textarea class="form-control" name="obs_ministerio" rows="3" placeholder="Alguma observação do Ministério">{{ old('obs_ministerio') }}</textarea>
                                            @if ($errors->has('obs_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('obs_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group{{ $errors->has('lider_ministerio') ? ' has-error' : '' }}">
                                            <label>Líder do Ministério</label>
                                            <input class="form-control" name="lider_ministerio" placeholder="Entre com o nome do Líder do Ministério" value="{{ $ministerio->lider_ministerio }}" required="required">
                                        	@if ($errors->has('lider_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lider_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group{{ $errors->has('colider_ministerio') ? ' has-error' : '' }}">
                                            <label>Colíder do Ministério</label>
                                            <input class="form-control" name="colider_ministerio" placeholder="Entre com o nome do Colíder do Ministério" value="{{ $ministerio->colider_ministerio }}" required="required">
                                        	@if ($errors->has('colider_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('colider_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Imagem Atual</label><br />   
                                            <img alt="" width="200" height="200" src="{{url('/imagens/ministerios/')}}/{{$ministerio->foto_ministerio}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Nova Imagem</label>
                                            <input type="hidden" name="foto_ministerio_antiga" value="{{$ministerio->foto_ministerio}}">
                                            <input type="file" name="foto_ministerio_nova">
                                        </div>
	
                                        <button type="submit" class="btn btn-default">Alterar</button>
                                        <a class="btn btn-default" href="{{ url('/listaMinisterio') }}" >Cancelar</a>
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
 
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

   @endsection
   
@section( 'dependencyJs' )
   <?php echo json_encode([ 'csrfToken' => csrf_token(), ]); ?> 
	<!-- <script src="//cdn.ckeditor.com/4.7.1/standart/ckeditor.js"></script> -->
	<script src="{{ url('/layout-admin') }}/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
	CKEDITOR.replace('texto_ministerio', {
	    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
	    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
	    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
	    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}',
	    height: 400
	  });
	  
	</script>
@endsection