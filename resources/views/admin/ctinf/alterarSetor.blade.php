@extends('admin.layoutAdmin')

	@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Altera Setor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça os dados do setor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" action="{{ url('/admin/ctinf/alterar-setor') }}" method="post">
                                    {{ csrf_field() }} 
                                    <input type="hidden" class="form-control" name="id_setor" value="{{ $setor->id_setor }}">
                                       <div class="form-group{{ $errors->has('nome_setor') ? ' has-error' : '' }}">
                                            <label>Nome do setor</label>
                                            <input class="form-control" name="nome_setor" placeholder="Entre com o nome do Setor" value="{{ $setor->nome_setor }}" required="required">
                                        	@if ($errors->has('nome_setor'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nome_setor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('sigla_setor') ? ' has-error' : '' }}">
                                            <label>Sigla do Setor</label>
                                            <input class="form-control" name="sigla_setor" placeholder="Entre com a sigla do setor" value="{{ $setor->sigla_setor }}" required="required">
                                        	@if ($errors->has('sigla_setor'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('sigla_setor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('descricao_setor') ? ' has-error' : '' }}">
                                            <label>Descrição do Setor</label>
                                            <input class="form-control" name="descricao_setor" placeholder="Entre com a descrição do setor" value="{{ $setor->descricao_setor }}" >
                                        	@if ($errors->has('descricao_setor'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('descricao_setor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('id_menu') ? ' has-error' : '' }}">
                                            <label>Menu da página - Hierarquia</label>
                                            <label for="priodidade">
	                                            <select class="form-control" name="id_menu" id="id_menu" required="required">
	                                            <option value="{{$setor->menus->id_menu}}" selected="selected">{{$setor->menus->nome_menu}}</option>
	                                            @foreach ($menu as $menus)    
												    <option value="{{ $menus->id_menu}} ">{{$menus->nome_menu}}</option>
												 @endforeach   
												 </select>
                                            </label>
                                            @if ($errors->has('id_menu'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('id_menu') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Alterar</button>
                                        <a class="btn btn-default"  href="{{ url('/inserirSetor') }}" >Cancelar</a>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
   @endsection
   
   @section( 'dependencyJs' )
		
	@endsection