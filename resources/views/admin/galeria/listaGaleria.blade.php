@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Imagens da Galeria</h1>
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
                            <a href="{{url ('/inserirGaleria')}}" class="btn btn-warning btn-lg" title="Inserir images">Inserir Imagens</a>
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtGaleria">
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
                        {"sTitle": "TIPO IMAGEM", "width": "15%", "sName": "tipo_imagem", "mData": "tipo_imagem"},
                        {"sTitle": "OBSERVAÇÃO", "width": "20%", "sName": "obs_imagem", "mData": "obs_imagem"},
                        {"sTitle": "CADASTRO", "width": "13%", "sName": "dhs_cadastro", "mData": "dhs_cadastro" },
                        {"sTitle": "IMAGEM","width": "37%", "sName": "id_galeria", "mData": function(data) {                                
                            var img = "";
                            if(data.nome_imagem.length > 0){
                                img = '<div><img style="width:200px; height:80px;" src="{{ url("/imagens/galeria") }}/'+ data.nome_imagem +'" alt=""></div>';
                            }

                            return img;
                        }
                    },
                        {"sTitle": "OPÇÕES", "width": "15%","searchable": false, "orderable":  false, "mData": function(data){

                                var button  = '<a title="Alterar" href="{{ url("/admin/galeria/alterar-galeria") }}/'+ data.id_galeria +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
                                if(data.dhs_exclusao_logica == null){
                                	button  += ' <a title="Inativar" href="{{ url("/admin/galeria/inativar-galeria") }}/'+ data.id_galeria +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }else{
                                	button  += ' <a title="Ativar" href="{{ url("/admin/galeria/ativar-galeria") }}/'+ data.id_galeria +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }
                                button  += ' <a title="Excluir" href="{{ url("/admin/galeria/excluir-galeria") }}/'+ data.id_galeria +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a>';
                                return button;
                        	}
                    
  
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtGaleria',
                    url_data : '/admin/galeria/lista-galeria.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>

@endsection
   