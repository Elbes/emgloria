@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Vídeos da Galeria</h1>
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
                            <a href="{{url ('/inserirVideo')}}" class="btn btn-warning btn-lg" title="Inserir vídeos">Inserir Videos</a>
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtVideo">
                            </table>
                        </div>     
                    </div>-
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
                        {"sTitle": "TIPO VÍDEO", "width": "15%", "sName": "tipo_video", "mData": "tipo_video"},
                        {"sTitle": "OBSERVAÇÃO", "width": "20%", "sName": "obs_imagem", "mData": "obs_video"},
                        {"sTitle": "CADASTRO", "width": "13%", "sName": "dhs_cadastro", "mData": "dhs_cadastro" },
                        {"sTitle": "VÍDEO","width": "37%", "sName": "id_video", "mData": function(data) {                                
                            var video = "";
                            if(data.nome_video.length > 0){
                            	 video = '<div style="text-align:center;"> <video controls width="80%" > <source src="{{ url("/") }}/videos/galeria/'+ data.nome_video +'" /></video></div>';
                            }

                            return video;
                        }
                    },
                        {"sTitle": "OPÇÕES", "width": "15%","searchable": false, "orderable":  false, "mData": function(data){

                                var button  = '<a title="Alterar" href="{{ url("/admin/galeria/alterar-video") }}/'+ data.id_video +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
                                if(data.dhs_exclusao_logica == null){
                                	button  += ' <a title="Inativar" href="{{ url("/admin/galeria/inativar-video") }}/'+ data.id_video +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }else{
                                	button  += ' <a title="Ativar" href="{{ url("/admin/galeria/ativar-video") }}/'+ data.id_video +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }
                                button  += ' <a title="Excluir" href="{{ url("/admin/galeria/excluir-video") }}/'+ data.id_video +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a>';
                                return button;
                        	}
                    
  
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtVideo',
                    url_data : '/admin/galeria/lista-video.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>

@endsection
   