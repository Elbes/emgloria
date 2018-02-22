@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alteração do Texto - <b>{{ $sobre->titulo}}</b> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações para alteração
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/sobre-igreja/altera-sobre') }}" method="post">
                                    {{ csrf_field() }} 
                                    	<input type="hidden" class="form-control" name="id_sobre" value="{{ $sobre->id_sobre }}"> 
                                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                                            <label>Título</label>
                                            <input class="form-control" name="titulo" placeholder="Entre com título" value="{{ $sobre->titulo }}" required="required">
                                        	@if ($errors->has('titulo'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('titulo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Texto</label>
                                            <textarea class="form-control" name="texto" rows="3" placeholder="Texto principal">{{ $sobre->texto}}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Salvar</button>
                                        <a class="btn btn-default" href="{{ url('/listaMissaoVisao') }}" >Cancelar</a>
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
		<!-- DataTables JavaScript -->
	   
@endsection
   