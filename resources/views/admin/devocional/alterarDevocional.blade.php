@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alteração do Devocional - <b>{{ $devocional->titulo }}</b> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações para alteração do Devocional
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{ url('/admin/devocional/altera-devocional') }}" method="post">
                                    {{ csrf_field() }} 
                                    	<input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id_usuario }}"> 
                                    	<input type="hidden" class="form-control" name="id_devocional" value="{{ $devocional->id_devocional }}">
                                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                                            <label>Título</label>
                                            <input class="form-control" name="titulo" placeholder="Entre com título" value="{{ $devocional->titulo }}" required="required">
                                        	@if ($errors->has('titulo'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('titulo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Texto</label>
                                            <textarea class="form-control" name="texto" id="texto">{{ $devocional->texto }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Salvar</button>
                                        <a class="btn btn-default" href="{{ url('/listaDevocional') }}" >Cancelar</a>
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
   
@section( 'dependencyJs' )

	<!-- <script src="//cdn.ckeditor.com/4.7.1/standart/ckeditor.js"></script> -->
	<script src="{{ url('/layout-admin') }}/ckeditor/ckeditor.js"></script> s
	<script type="text/javascript">
	
	CKEDITOR.replace('texto', {
	    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
	    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
	    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
	    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}',
	    height: 400
	  });
	  
	</script>
@endsection
   