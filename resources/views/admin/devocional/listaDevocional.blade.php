@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Devocional</h1>
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
                        <a href="{{url ('/inserirDevocional')}}" class="btn btn-warning btn-lg" title="Inserir um novo Devocional">Cadastrar Novo</a>
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtDevocional">
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
                        {"sTitle": "TÍTULO", "width": "25%", "sName": "titulo", "mData": "titulo"},
                        {"sTitle": "TEXTO", "width": "50%", "sName": "texto", "mData": "texto"},
                        {"sTitle": "ATUALIZAÇÃO", "width": "15%", "sName": "dhs_atualizacao", "mData": "dhs_atualizacao"},
                        {"sTitle": "OPÇÕES", "width": "10%","searchable": false, "orderable":  false, "mData": function(data){

                                var button  = '<a title="Alterar" href="{{ url("/admin/devocional/alterar-devocional") }}/'+ data.id_devocional +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
	                                if(data.dhs_exclusao_logica == null){
	                                	button  += ' <a title="Inativar" href="{{ url("/admin/devocional/inativar-devocional") }}/'+ data.id_devocional +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
	                                }else{
                                	button  += ' <a title="Ativar" href="{{ url("/admin/devocional/ativar-devocional") }}/'+ data.id_devocional +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }
                                return button;
                        	}
                    
  
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtDevocional',
                    url_data : '/admin/devocional/lista-devocional.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>

@endsection
   