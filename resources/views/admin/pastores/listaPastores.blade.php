@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pastores Cadastrados</h1>
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
                            <a href="{{url ('/inserirPastores')}}" class="btn btn-warning btn-lg" title="Inserir um novo Pastor">Cadastrar Novo</a>
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtPastor">
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
                        {"sTitle": "NOME PASTOR", "width": "15%", "sName": "nome_pastor", "mData": "nome_ministerio"},
                        {"sTitle": "FOTO","width": "37%", "sName": "id_pastor", "mData": function(data) {                                
                            var img = "";
                            if(data.foto_pastor.length > 0){
                                img = '<div><img style="width:200px; height:80px;" src="{{ url("/imagens/galeria") }}/'+ data.foto_pastor +'" alt=""></div>';
                            }

                            return img;
                       	 	}
                  	  	},
                        {"sTitle": "FUNÇÃO", "width": "100px", "sName": "funcao_pastor", "mData": "funcao_pastor"},
                        {"sTitle": "OBSERVAÇÃO", "width": "100px", "sName": "obs_pastor", "mData": "obs_pastor"},
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
                    id_tabela : 'dtPastor',
                    url_data : '/admin/pastores/lista-pastores.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>

@endsection
   