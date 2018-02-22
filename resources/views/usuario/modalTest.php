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
				                                @foreach ($setores as $setor)
				                                	<option value="{{$setor->id_setor}}">{{$setor->nome_setor}}</option>
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
						<button type="button" id="bntModalEditarMedicamento" class="btn btn-primary" data-dismiss="modal" >
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

<script type="text/javascript">
$(document).ready(function() {
		
    $("#bntModalEditarMedicamento").click(function(e) {

        var jOption = {
            url: "/usuario/alterar-usuario",
            type: "post",
            async: true,
            idForm: "editar-medicamento-form",
          //  gridRemove: objGrid,
            setTimeOut: 5000,
            confirmBox: { title:'CONFIRMAÃ‡ÃƒO', content: 'Deseja realmente editar o medicamento?', buttons: '[NÃ£o][Sim]', bnt1: 'NÃ£o', bnt2: 'Sim'},
            nameFunctionCallback: 'atualizaDados'
        }

        AjaxSalvar( jOption );

        //$("#dt_ocupacao_de_leito").DataTable().ajax.reload();

        e.preventDefault();


    });
	
	

});

function incluiValoresCamposModal(el){
    var id_usuario = $(el).data('id_usuario');
    var email = $(el).data('email');
    var matricula = $(el).data('matricula');
    var nome = $(el).data('nome');
    var sigla_setor = $(el).data('sigla_setor');
    var id_setor = $(el).data('id_setor');

    $("#id_usuario").val(id_usuario);
    $("#txt_email").val(email);
    $("#txt_matricula").val(matricula);
    $("#txt_nome").val(nome);  
    $("#txt_sigla_setor").val(sigla_setor);
    $("#txt_id_setor").val(id_setor);
	
}

function atualizaDados(){
	
	var datatable = $('#dtUsuario').dataTable().api();

	$.get('/usuario/lista-usuario.json');
	
}

button += '<a href="#modalEditarMedicamento" id="bntAjustar_'+ data.id_usuario +'" onclick="incluiValoresCamposModal(this);" data-id_usuario="'
+ data.id_usuario +'" data-email="'+ data.email +'" data-nome="'+ data.nome +'" data-matricula="'
+ data.matricula +'" data-sigla_setor="'+ data.setor.sigla_setor +'" data-id_setor="'+ data.id_setor +'" class="btn btn-success mgn-btn-dt"  data-toggle="modal" title="Editar"><i class="fa fa-pencil-square-o"></i></a>';
</script>