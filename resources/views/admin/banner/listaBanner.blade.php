@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Banners Cadastrados</h1>
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
                            <a href="{{url ('/inserirBanner')}}" class="btn btn-warning btn-lg" title="Inserir um novo Banner">Cadastrar Novo</a>
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
                        {"sTitle": "NOME DO BANNER", "width": "25%", "sName": "banner_nome", "mData": "banner_nome"},
                        {"sTitle": "CADASTRO", "width": "100px", "sName": "dhs_cadastro", "mData": "dhs_cadastro" },
                        {"sTitle": "VALIDADE", "width": "100px", "sName": "validade", "mData": "validade"},
                        {"sTitle": "PRIORIDADE", "width": "60px", "sName": "prioridade", "mData": "prioridade"},
                        {"sTitle": "IMAGEM","width": "100px", "sName": "id_banner", "mData": function(data) {                                
                            var img = "";
                            if(data.imagen_banner.length > 0){
                                img = '<div><img style="width:200px; height:80px;" src="{{ url("/imagens/banners") }}/'+ data.imagen_banner +'" alt=""></div>';
                            }

                            return img;
                        }
                    },
                        {"sTitle": "OPÇÕES", "width": "155px","searchable": false, "orderable":  false, "mData": function(data){

                                var button  = '<a title="Alterar" href="{{ url("/admin/banner/alterar-banner") }}/'+ data.id_banner +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
                                if(data.dhs_exclusao_logica == null){
                                	button  += ' <a title="Inativar" href="{{ url("/admin/banner/inativar-banner") }}/'+ data.id_banner +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }else{
                                	button  += ' <a title="Ativar" href="{{ url("/admin/banner/ativar-banner") }}/'+ data.id_banner +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }
                                button  += ' <a title="Excluir" href="{{ url("/admin/banner/excluir-banner") }}/'+ data.id_banner +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a>';
                                return button;
                        	}
                    
  
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtBanner',
                    url_data : '/admin/banner/lista-banner.json',
                    colunas: dtColumnsLink,
                   
           		 });  
	
                });

            </script>

@endsection
   