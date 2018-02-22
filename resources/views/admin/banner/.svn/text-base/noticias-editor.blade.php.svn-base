@extends('admin.layoutAdmin')

	@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Página de notícias ASCON</b> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Entre com as informações da página
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                	<form role="form" action="{{ url('/admin/ascon/inserir-noticia') }}" method="post">
                                		{{ csrf_field() }} 
                                		@foreach($conteudo as $pagina)
                                			<input type="hidden" class="form-control" name="id_pagina" value="{{ $pagina->id_pagina }}"> 
                                			<textarea class="ckeditor" name="conteudo" id="conteudo">{{ $pagina->pagina_conteudo }}</textarea>
                                		@endforeach
                                		<button type="submit" class="btn btn-default">Salvar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
   
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
   <script src="{{ url('/') }}/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
	CKEDITOR.replace('conteudo', {
	    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
	    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
	    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
	    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
	  });
	</script>
		
	   
@endsection
   