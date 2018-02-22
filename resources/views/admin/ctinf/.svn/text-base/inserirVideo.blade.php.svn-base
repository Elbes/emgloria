@extends('admin.layoutAdmin')

	@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Vídeos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações do vídeo para tela inicial
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/ctinf/inserir-video') }}" method="post">
                                    {{ csrf_field() }} 
                                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id_usuario }}">
                                        <div class="form-group{{ $errors->has('video_nome') ? ' has-error' : '' }}">
                                            <label>Nome do Vídeo</label>
                                            <input class="form-control" name="video_nome" placeholder="Entre com o nome do Vídeo" value="{{ old('video_nome') }}" required="required">
                                        	@if ($errors->has('video_nome'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('video_nome') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('video_descricao') ? ' has-error' : '' }}">
                                            <label>Descrição do Vídeo</label>
                                            <input class="form-control" name="video_descricao" placeholder="Entre com a descrição do vídeo" value="{{ old('video_descricao') }}" required="required">
                                        	@if ($errors->has('video_descricao'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('video_descricao') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Selecione o Vídeo</label>
                                            <input type="file" name="video" required="required" title="Selecione o vídeo para enviar">
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
                <!-- /.col-lg-12 -->
            <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vídeos Cadastrados
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtVideo">
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
                        {"sTitle": "NOME DO VÍDEO", "width": "25%", "sName": "video_nome", "mData": "video_nome"},
                        {"sTitle": "DESCRIÇÃO", "width": "100px", "sName": "video_descricao", "mData": "video_descricao" },
                        {"sTitle": "CADASTRO", "width": "130px", "sName": "dhs_cadastro", "mData": "dhs_cadastro"},
                        {"sTitle": "VÍDEO","width": "80px", "sName": "id_video", "mData": function(data) {                                
                            var video = "";
                            if(data.video.length > 0){
                                video = '<div style="text-align:center;"> <video controls width="80%" > <source src="{{ url("/") }}/videos/'+ data.video +'" /></video></div>';
                            }
                            return video;
                        }
                    },
                        {"sTitle": "OPÇÕES", "width": "155px","searchable": false, "orderable":  false, "mData": function(data){

                                var button  = '<a title="Alterar" href="{{ url("/admin/ctinf/altera-video") }}/'+ data.id_video +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
                                if(data.dhs_exclusao_logica == null){
                                	button  += ' <a title="Inativar" href="{{ url("/admin/ctinf/inativar-video") }}/'+ data.id_video +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }else{
                                	button  += ' <a title="Ativar" href="{{ url("/admin/ctinf/ativar-video") }}/'+ data.id_video +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                                }
                                button  += ' <a title="Excluir" href="{{ url("/admin/ctinf/excluir-video") }}/'+ data.id_video +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a>';
                                return button;
                        	}
  
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtVideo',
                    url_data : '/admin/ctinf/lista-video.json',
                    colunas: dtColumnsLink
           		 });  
	
                });

            </script>

@endsection
   