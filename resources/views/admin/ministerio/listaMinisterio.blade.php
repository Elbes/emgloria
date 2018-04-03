@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ministérios Cadastrados</h1>
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
                            <a href="{{url ('/inserirMinisterio')}}" class="btn btn-warning btn-lg" title="Inserir um novo Ministério">Cadastrar Novo</a>
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtBanner">
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
                        {"sTitle": "NOME DO MINISTÉRIO", "width": "15%", "sName": "nome_ministerio", "mData": "nome_ministerio"},
                        {"sTitle": "TEXTO MINISTÉRIO", "width": "250px", "sName": "texto_ministerio", "mData": function(data){
                            return $("<div>"+ data.texto_ministerio + "</div>" ).text();
                            
                        	}
                    	},
                        {"sTitle": "LÍDER", "width": "100px", "sName": "lider_ministerio", "mData": "lider_ministerio"},
                        {"sTitle": "COLÍDER", "width": "100px", "sName": "colider_ministerio", "mData": "colider_ministerio"},
                        {"sTitle": "CADASTRO", "width": "60px", "sName": "dhs_cadastro", "mData": "dhs_cadastro"},
                        {"sTitle": "OPÇÕES", "width": "155px","searchable": false, "orderable":  false, "mData": function(data){

                                var button  = '<a title="Alterar" href="{{ url("/admin/ministerio/alterar-ministerio") }}/'+ data.id_ministerio +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
                                if(data.dhs_exclusao_logica == null){
                                	button  += ' <a title="Inativar" href="{{ url("/admin/ministerio/inativar-ministerio") }}/'+ data.id_ministerio +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }else{
                                	button  += ' <a title="Ativar" href="{{ url("/admin/ministerio/ativar-ministerio") }}/'+ data.id_ministerio +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }
                                button  += ' <a title="Excluir" href="{{ url("/admin/ministerio/excluir-ministerio") }}/'+ data.id_ministerio +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a>';
                                return button;
                        	}
                    
  
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtBanner',
                    url_data : '/admin/ministerio/lista-ministerio.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>

@endsection
   