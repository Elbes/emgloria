@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de Usuários Cadastrados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Usuários com permissões no Site
                        </div>
                         <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dtUsuario">
                            </table>
                          </div>     
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        
    <!-- Modal ajusta leito-->
	<div class="modal fade" id="modalEditarMedicamento" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h4 class="modal-title">
					<span class="widget-icon"> <i class="fa fa-medkit"></i> </span>
						Editar Usuário
					</h4>
				</div>
				<div class="modal-body no-padding">
					<form  class="smart-form" id="editar-medicamento-form" role="form" method="POST" action="{{ url('/alterar-usuario') }}">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<input type="hidden" name="id_usuario" id="id_usuario"/>
						<fieldset>
							<div class="col-md-12">                                        
								
									<div class="form-group col-md-12" style="padding: 5px;">
										<label>Email: </label>
										<label class="label"></label>
										<input id="txt_email" name="email" class="form-control"   value="" placeholder="Digite o nome do medicamento">										
									</div>
								
							
									<div class="form-group col-md-12" style="padding: 5px;">
										<label>Matricula: </label>
										<input id="txt_matricula" name="matricula" class="form-control"   value="" placeholder="Digite o nome do medicamento">	
									</div>
								
								
									<div class="form-group col-md-12" style="padding: 5px;">
										<label>Nome: </label>
										<input id="txt_nome" name="nome" class="form-control"   value="" placeholder="Digite o nome do medicamento">	
									</div>
								
									<div class="form-group col-md-12" style="padding: 5px;">
											<select class="form-control" id="id_setor" name="id_setor">
				                                <option selected="selected" value="txt_id_setor"></option>
				                                @foreach ($perfis as $perfil)
				                                	<option value="{{$perfil->id_perfil}}">{{$perfil->nome_perfil}}</option>
				                                @endforeach
				                                </select>
									</div>
							       <div class="form-group col-md-12" style="padding: 5px;">
										<label>Setor Atual: </label>
										<input id="txt_sigla_setor" name="txt_sigla_setor" class="form-control" disabled="disabled" size=""  value="" placeholder="Setor Atual">	
									</div>
							</div>
						</fieldset> 
						<footer>
						<button type="button" name="bntModalEditarMedicamento" id="bntModalEditarMedicamento" class="btn btn-primary" data-dismiss="modal" >
								Conf
							</button>
							<input type="submit" value="Confirmar" class="btn btn-primary" data-dismiss="modal" >
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Fechar
							</button>
						</footer>
					</form>
				</div>
			</div>
		</div>
	</div>
   @endsection
   
   @section( 'dependencyJs' )
		<!-- DataTables JavaScript -->
	    
		<script type="text/javascript">
			  
				 
                var dtColumnsLink = function() {
                    var columns = [
                        {"sTitle": "Nome", "width": "25%", "sName": "nome", "mData": "nome"},
                        {"sTitle": "TELEFONE", "sName": "telefone", "mData": "telefone"},
                        {"sTitle": "EMAIL", "sName": "email", "mData": "email"},
                        {"sTitle": "PERFIL", "sName": "nome_perfil", "mData": function( data){
                            return data.perfil.nome_perfil;
                        	}
                        },
                        {"sTitle": "DT CADASTRO", "sName": "dhs_cadastro", "mData": "dhs_cadastro"},
                        {"sTitle": "OPÇÕES", "width": "155px", "searchable": false, "orderable":  false, "data": function( data){
                            
                        	
                        	 var button  = '<a title="Alterar" href="{{ url("/usuario/alterar") }}/'+ data.id_usuario +'" class="btn btn-success mgn-btn-dt"><i class="fa fa-pencil-square-o"></i></a>';
                             if(data.dhs_exclusao_logica == null){
                             	button  += ' <a title="Inativar" href="{{ url("/usuario/inativar-usuario") }}/'+ data.id_usuario +'" class="btn btn-primary mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                             }else{
                             	button  += ' <a title="Ativar" href="{{ url("/usuario/ativar-usuario") }}/'+ data.id_usuario +'" class="btn btn-warning mgn-btn-dt"><i class="glyphicon glyphicon-off"></i></a>';
                             }
                             button  += ' <a title="Excluir" href="{{ url("/usuario/excluir-usuario") }}/'+ data.id_usuario +'" class="btn btn-danger mgn-btn-dt"><i class="fa fa-trash"></i></a>';
                             return button;
                            }
                        }
                    ]

                    return columns;
                } 
                
              $(document).ready(function() { 
                dtTable({ 
                    id_tabela : 'dtUsuario',
                    url_data : '/usuario/lista-usuario.json',
                    colunas: dtColumnsLink,
           		 });  
	
                });

            </script>
	@endsection