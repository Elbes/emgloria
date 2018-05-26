@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pedidos de Oração</h1>
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
                            <a href="{{url ('/inserirPastores')}}" class="btn btn-warning btn-lg" title="Inserir um novo Pedido de Oração">Cadastrar Novo</a>
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtOracao">
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
                        {"sTitle": "SOLICITANTE", "width": "20%", "sName": "nome_solicitante", "mData": "nome_solicitante"},
                        {"sTitle": "TELFONE", "width": "15%", "sName": "telefone_solicitante", "mData": "telefone_solicitante"},
                        {"sTitle": "EMAIL", "width": "18%", "sName": "email_solicitante", "mData": "email_solicitante"},
                        {"sTitle": "PEDIDO", "width": "23%", "sName": "oracao_pedido", "mData": "oracao_pedido"},
                        {"sTitle": "CADASTRO", "width": "14%", "sName": "dhs_cadastro", "mData": "oracao_pedido"},
                        {"sTitle": "OPÇÕES", "width": "10%","searchable": false, "orderable":  false, "mData": function(data){

                                var button = ' <center><a title="Excluir" href="{{ url("/admin/pedidos-oracao/excluir-oracao") }}/'+ data.id_pedidos_oracao +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a></center>';
                                return button;
                        	}
                    
  
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtOracao',
                    url_data : '/admin/pedidos-oracao/lista-oracoes.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>

@endsection