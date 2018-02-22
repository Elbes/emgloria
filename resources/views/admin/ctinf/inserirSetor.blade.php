@extends('admin.layoutAdmin')

	@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Setor</h1>
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
                                    <form role="form" action="{{ url('/admin/ctinf/inserir-setor') }}" method="post">
                                    {{ csrf_field() }} 
                                       <div class="form-group{{ $errors->has('nome_setor') ? ' has-error' : '' }}">
                                            <label>Nome do setor</label>
                                            <input class="form-control" name="nome_setor" placeholder="Entre com o nome do Setor" value="{{ old('nome_setor') }}" required="required">
                                        	@if ($errors->has('nome_setor'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nome_setor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('sigla_setor') ? ' has-error' : '' }}">
                                            <label>Sigla do Setor</label>
                                            <input class="form-control" name="sigla_setor" placeholder="Entre com a sigla do setor" value="{{ old('sigla_setor') }}" required="required">
                                        	@if ($errors->has('sigla_setor'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('sigla_setor') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('descricao_setor') ? ' has-error' : '' }}">
                                            <label>Descrição do Setor</label>
                                            <input class="form-control" name="descricao_setor" placeholder="Entre com a descrição do setor" value="{{ old('descriao_setor') }}" >
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
	                                            <option value="" selected="selected">Selecione..</option>
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
                <!-- /.col-lg-6 -->
                 <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Setores Cadastrados
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtLink">
                            </table>
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
		<!-- DataTables JavaScript -->
	   
	    
		<script type="text/javascript">
			  
				 
                var dtColumnsLink = function() {
                    var columns = [
                        {"sTitle": "NOME DO SETOR", "width": "25%", "sName": "nome_setor", "mData": "nome_setor"},
                        {"sTitle": "SIGLA", "width": "8%", "sName": "sigla_setor", "mData": "sigla_setor"},
                        {"sTitle": "DESCRIÇÃO DO SETOR", "sName": "descricao_setor", "mData": "descricao_setor"},
                        {"sTitle": "CADASTRO", "width": "100px", "sName": "dhs_cadastro", "mData": "dhs_cadastro"},
                        {"sTitle": "OPÇÕES", "width": "12%", "searchable": false, "orderable":  false, "data": function( data){

                        	 var button  = '<a title="Alterar" href="{{ url("/admin/ctinf/altera-setor") }}/'+ data.id_setor +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
                             if(data.dhs_exclusao_logica == null){
                             	button  += ' <a title="Inativar" href="{{ url("/admin/ctinf/inativar-setor") }}/'+ data.id_setor +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                             }else{
                             	button  += ' <a title="Ativar" href="{{ url("/admin/ctinf/ativar-setor") }}/'+ data.id_setor +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                             }
                             button  += ' <a title="Excluir" href="{{ url("/admin/ctinf/excluir-setor") }}/'+ data.id_setor +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a>';
                             return button;
                            }
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtLink',
                    url_data : '/admin/ctinf/lista-setor.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>
	@endsection