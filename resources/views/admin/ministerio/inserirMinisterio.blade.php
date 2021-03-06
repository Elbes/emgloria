@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Ministérios</h1>
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
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/ministerio/inserir-ministerio') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id_usuario }}"> 
                                        <div class="form-group{{ $errors->has('nome_ministerio') ? ' has-error' : '' }}">
                                            <label>Nome do Ministério</label>
                                            <input class="form-control" name="nome_ministerio" placeholder="Entre com o nome do Ministério" value="{{ old('nome_ministerio') }}" required="required">
                                        	@if ($errors->has('nome_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nome_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <!-- <div class="form-group{{ $errors->has('texto_ministerio') ? ' has-error' : '' }}">
                                            <label>Texto do Ministério</label>
                                            <textarea class="form-control" name="texto_ministerio" rows="7" required placeholder="Entre com o texto do Ministério">{{ old('texto_ministerio') }}</textarea>
                                            @if ($errors->has('texto_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('texto_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>  -->
                                        <div class="form-group{{ $errors->has('texto_ministerio') ? ' has-error' : '' }}">
                                            <label>Texto do Ministério</label>
                                			<textarea class="form-control" name="texto_ministerio" id="texto_ministerio">{{ old('texto_ministerio') }}</textarea>
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
                                            <input class="form-control" name="lider_ministerio" placeholder="Entre com o nome do Líder do Ministério" value="{{ old('lider_ministerio') }}" required="required">
                                        	@if ($errors->has('lider_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lider_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('colider_ministerio') ? ' has-error' : '' }}">
                                            <label>Colíder do Ministério</label>
                                            <input class="form-control" name="colider_ministerio" placeholder="Entre com o nome do Colíder do Ministério" value="{{ old('colider_ministerio') }}" required="required">
                                        	@if ($errors->has('colider_ministerio'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('colider_ministerio') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Imagem</label>
                                            <input type="file" name="foto_ministerio">
                                        </div>
                                        <button type="submit" class="btn btn-default">Cadastrar</button>
                                        <button type="reset" class="btn btn-default">Limpar</button>
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