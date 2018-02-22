@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Programação</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
            <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <a href="{{url ('/inserirProgramacao')}}" class="btn btn-warning btn-lg" title="Inserir uma nova programação">Cadastrar Novo</a>
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtProgramacao">
                            </table>
                        </div>     
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
   @endsection
   
   @section( 'dependencyJs' )
		<!-- DataTables JavaScript -->
	   
	    
		<script type="text/javascript">
			  
				 
                var dtColumnsLink = function() {
                    var columns = [
                        {"sTitle": "DIA", "width": "15%", "sName": "dia_programacao", "mData": "dia_programacao"},
                        {"sTitle": "TEXTO PROGRAMAÇÃO", "width": "40%", "sName": "texto_programacao", "mData": "texto_programacao"},
                        {"sTitle": "PRIORIDADE", "width": "15%", "sName": "prioridade", "mData": "prioridade"},
                        {"sTitle": "CADASTRO", "width": "15%", "sName": "dhs_cadastro", "mData": "dhs_cadastro"},
                        {"sTitle": "OPÇÕES", "width": "15%","searchable": false, "orderable":  false, "mData": function(data){

                                var button  = '<a title="Alterar" href="{{ url("/admin/programacao/alterar-programacao") }}/'+ data.id_programacao +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
	                                if(data.dhs_exclusao_logica == null){
	                                	button  += ' <a title="Inativar" href="{{ url("/admin/programacao/inativar-programacao") }}/'+ data.id_programacao +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
	                                }else{
                                	button  += ' <a title="Ativar" href="{{ url("/admin/programacao/ativar-programacao") }}/'+ data.id_programacao +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }
	                                button  += ' <a title="Excluir" href="{{ url("/admin/programacao/excluir-programacao") }}/'+ data.id_programacao +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a>';
                                return button;
                        	}
                    
  
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtProgramacao',
                    url_data : '/admin/programacao/lista-programacao.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>

@endsection
   