 <!-- CSRF Token --> <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Scripts --> 
@extends('admin.layoutAdmin')

	@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   @foreach ($pagina_result as $pagina)
                     <h1 class="page-header">Conteúdo - {{ $pagina->pagina_nome}}</h1>
                   @endforeach 
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações para o novo conteúdo, ou poderá editar os já existentes
                        </div>
                       
                        <div class="panel-body">
                        <form role="form" action="{{ url('/admin/alterar-conteudo') }}" method="post">
                            <div class="row">
                                <div class="col-lg-4">
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                    @foreach ($conteudo as $cont)
                                        <input type="hidden" class="form-control" name="id_conteudo" value="{{ $cont->id_conteudo}}">
                                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id_usuario }}">  
                                        <div class="form-group{{ $errors->has('titulo_conteudo') ? ' has-error' : '' }}">
                                            <label>Título</label>
                                            <input class="form-control" name="titulo_conteudo" placeholder="Entre com o título do novo conteúdo" value="{{ $cont->titulo_conteudo }}" required="required">
                                        	@if ($errors->has('titulo_conteudo'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('titulo_conteudo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-10">        
                                        <div class="form-group{{ $errors->has('pagina_conteudo') ? ' has-error' : '' }}">
                                            <label>Conteúdo</label>
                                			<textarea class="ckeditor" name="pagina_conteudo" id="pagina_conteudo">{{ $cont->pagina_conteudo }}</textarea>
                                			@if ($errors->has('pagina_conteudo'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('pagina_conteudo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
									@endforeach
                                        <button type="submit" class="btn btn-default">Salvar</button>
                                </div>
                            </div>
                          </form>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
   @endsection
   
   @section( 'dependencyJs' )
<!-- <script> window.Laravel = <?php echo json_encode([ 'csrfToken' => csrf_token(), ]); ?> </script> -->
<!-- <script src="//cdn.ckeditor.com/4.7.1/standart/ckeditor.js"></script> -->
	<script src="{{ url('/') }}/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
	CKEDITOR.replace('pagina_conteudo', {
	    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
	    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
	    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
	    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}',
	    height: 800
       
	  });
	</script>
@endsection
   