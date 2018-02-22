<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller {
	
	public function getInserir() {
		$perfil = new \App\tb_perfil();
		$perfis= $perfil->getTodosPerfis();
		
		return view ( 'usuario.cadastro', compact ( 'perfis' ) );
	}
	
	public function inserirUsuario(Request $request) {
		
		$usuario = new \App\tb_usuarios();
		$pesq = \App\tb_usuarios::where('email', $request->input ( 'email' ))->get()->first();
		
		if(isset($pesq))
		{
			Session::flash ( 'warning', 'Já existe usuário cadastrado com este endereço de email.' );
		}else{
			$usuario->nome = $request->input ( 'nome' );
			$usuario->email = $request->input ( 'email' );
			$usuario->senha = Hash::make ( $request->input ( 'senha' ) );
			$usuario->id_perfil = $request->input ( 'id_perfil' );
			//$usuario->dhs_exclusao_logica = Carbon::now ();
			
			if ($usuario->save ()) {
				Session::flash ( 'success', 'Usuário inserido com sucesso!!Agurde Liberação de acesso' );
			} else {
				Session::flash ( 'error', 'Erro ao tentar inserir o Usuario!!!Tente Novamente.' );
			}
		}
		
		return Redirect::to ( '/cadastro-usuario' );
	}
	
	public function getListaUsuario() {
		$usuario = \App\ta_usuarios::where ( 'id_usuario', Auth::user ()->id_usuario )->get ();
		
		$setor = new \App\ta_setor ();
		$setores = $setor->getTodosSetores ();
		
		return view ( 'usuario.listaUsuario', compact ( 'usuario', 'setores' ) );
	}
	
	public function getListaUsuarioJson() {
		$usuario = new \App\ta_usuarios ();
		return $usuario->getDtUsuario ();
	}
	
	//LISTA DADOS DO USUARIO NA VIEW PARA ALTERAR
	public function getAlterarUsuario($id_usuario )
	{
		$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
		$setor = new \App\ta_setor ();
		$setores = $setor->getTodosSetores ();
		 
		$use = \App\ta_usuarios::withTrashed()->find( $id_usuario );
		 
		if ($use == null) {
			// Está inativo no banco de dados =P
			Session::flash('warning', 'usuário não encontrado!!!');
			return Redirect::to('/listaUsuario');
		}else{
			return view('usuario.alterarUsuario', compact('use', 'usuario', 'setores'));
		}
		 
	}
	
	//FUNÇÃO PARA ALTERA DADOS DO USUARIO
	public function alterarUsuario(Request $request){
		 
		$usuario = \App\ta_usuarios::withTrashed()->find( $request->input('id_usuario') );
		 
		$usuario->email =  $request->input('email');
		$usuario->matricula =  $request->input('matricula');
		$usuario->nome =  $request->input('nome');
		$usuario->id_setor =  $request->input('id_setor');
		 
		if($usuario->save()){
			Session::flash('success', 'Usuário alterado com sucesso!!!');
		}else{
			Session::flash('error', 'Erro ao tentar alterar o Usuário!!!Tente Novamente.');
		}
		  return Redirect::back();
		//return Redirect::to('/listaUsuario');
	}

	
	public function excluirUsuario($id_usuario) {
		
		$usuario = \App\ta_usuarios::withTrashed()->find( $id_usuario );
		
		if ($usuario->forceDelete ()) {
			Session::flash ( 'success', 'Usuário ' . $usuario->nome . ' excluído com sucesso!!!' );
		} else {
			Session::flash ( 'error', ' Erro ao tentar excluir o Usuário ' . $usuario->nome . ' !!!' );
		}
		return Redirect::to ( '/listaUsuario' );
	}
	
	public function inativarUsuario($id_usuario) {
		$usuario = \App\ta_usuarios::where ( 'id_usuario', $id_usuario );
		
		if ($usuario->delete ()) {
			Session::flash ( 'success', 'Desativado com sucesso!!!' );
		} else {
			Session::flash ( 'error', 'Erro ao tentar desativar Usuario!!!' );
		}
		return Redirect::to ( '/listaUsuario' );
	}
	
	public function ativarUsuario($id_usuario) {
		$usuario = \App\ta_usuarios::where ( 'id_usuario', $id_usuario );
		
		if ($usuario->restore ()) {
			Session::flash ( 'success', 'Ativado com sucesso!!!' );
		} else {
			Session::flash ( 'error', 'Erro ao tentar ativar Usuário!!!' );
		}
		return Redirect::to ( '/listaUsuario' );
	}
	
	//VIEW PARA ALTERAR DADOS DO USUÁRIO LOGADO
	public function getMeusDados()
	{
		$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
		$setor = new \App\ta_setor ();
		$setores = $setor->getTodosSetores ();
		
		$use = \App\ta_usuarios::withTrashed()->find( Auth::user()->id_usuario );
			
		if ($usuario == null) {
			// Está inativo no banco de dados =P
			Session::flash('warning', 'Usuário não encontrado!!!');
			return Redirect::back();
		}else{
			return view('usuario.meusDados', compact('use', 'usuario', 'setores'));
		}
	}
	
	//VIEW ALTERAR SENHA USUÁRIO LOGADO
	public function getAlterarSenha()
	{
		$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
		$setor = new \App\ta_setor ();
		$setores = $setor->getTodosSetores ();
	
		$use = \App\ta_usuarios::withTrashed()->find( Auth::user()->id_usuario );
			
		if ($usuario == null) {
			// Está inativo no banco de dados =P
			Session::flash('warning', 'Usuário não encontrado!!!');
			return Redirect::back();
		}else{
			return view('usuario.alterarSenha', compact('use', 'usuario', 'setores'));
		}
	}
	
	//FUNÇÃO PARA ALTERA SENHA DO USUARIO LOGADO
	public function alterarSenha(Request $request){
			
		/* $this->validate($request, [
				'nova_senha'              => 'required|min:6',
				'confirme_senha' => 'required|confirmed'
		]); */
		
		$usuario = \App\ta_usuarios::withTrashed()->find( $request->input('id_usuario') );
		$senha_atual = $request->input('senha_atual');
		$nova_senha = $request->input('nova_senha');
		$confirme_senha = $request->input('confirme_senha');
		if (Hash::check($senha_atual,Auth::user()->senha))
		{
			
			if ($nova_senha == $confirme_senha)
			{
				$usuario->senha = Hash::make ($nova_senha);
				if ($usuario->save ())
				{
					Session::flash('success', 'Senha alterada com sucesso!!!');
				}else {
					Session::flash ( 'error', 'Erro ao tentar alterar o Usuario!!!Tente Novamente.' );
				}
			}else
			{
				Session::flash('error', 'Nova senha e confirmação não conferem.');
			}
		 }else
		 {
			Session::flash('error', 'Senha não confere com o usuário logado.');
		 }
		return Redirect::back();
		//return Redirect::to('/listaUsuario');
	}
	
	// Exibe página de recuperação de senha
	public function esqueceuSenha() {
		return view ( 'usuario.emailSenha' );
	}
	
	public function enviaEmail(Request $request) {
		$pesq_usuario = \App\ta_usuarios::where ( 'email', '=', $request->input ( 'email' ) )->get ()->first ();
		
		$recupera = new \App\ta_recupera_senha ();
		$recupera->id_usuario = $pesq_usuario->id_usuario;
		$recupera->email = $request->input ( 'email' );
		$recupera->utilizado = 0;
		
		if (! is_null ( $recupera ) && ! is_null ( $pesq_usuario )) {
			$token = uniqid ( rand (), true );
			$recupera->token = $token;
			// $link_intra = "<a href='http://intranet-ses.app/recuperar-senha/$token' class='btn btn-primary' title='Clique para recuperar sua senha'>Clique para recuperar</a>";
			
			// Pega dados para o envio do email
			$data = array (
					'token' => $token,
					'usuario_nome' => $pesq_usuario->nome,
					'usuario_id' => $pesq_usuario->id_usuario,
					'email' => $request->input ( 'email' ),
					'link' => 'http://intranet-ses.app/recuperar-senha/' . $pesq_usuario->id_usuario . '/' . $token 
			);
			
			if ($recupera->save ()) {
				// Envia o email de recuperação de senha
				Mail::send ( 'usuario.email-recuperar-senha', $data, function ($message) use ($recupera) {
					$message->to ( $recupera->email, 'Intranet - SESDF' )->subject ( 'Recuperação de Senha' );
				} );
				
				Session::flash ( 'success', 'Foi enviado para seu email link de recuperação de senha!!!' );
			} else {
				Session::flash ( 'error', 'Não foi possível realizar a solicitação. Tente novamente!!!' );
			}
		} else {
			Session::flash ( 'error', 'Não foi encontrado usuário para o email fornecido!!!' );
		}
		
		return Redirect::to ( '/esqueceuSenha' );
	}
	
	public function recuperarSenha($id_usuario, $token) {
		
		$objReturn = array();
		// TESTES DE VALIDADES DO TOKEN
		try {
			
			// Verifica se a url estão completa (TOKEN e ID_USUARIO)
			if ((! is_null ( $id_usuario )) && (! is_null ( $token ))) {
				
				// Busca a solicitação pelo token e pelo id_usuaro
				$recupera = \App\ta_recupera_senha::where('id_usuario', $id_usuario)->where('token', $token)
				        ->get ()->last ();
				
				// Verifica se encontrou
				if (! is_null ( $recupera )) {
					
					// Verifica se o token já foi utilizado
					if (! $recupera->utilizado) {
						
						// Calcula o tempo de validade do TOKEN (minutos)
						$limite_token = 360;
						$dhs_cadastro = $recupera->dhs_cadastro;
						$dhs_expira = date ( 'Y-m-d H:i:s', strtotime ( '+' . + $limite_token . ' minute', strtotime ( $dhs_cadastro ) ) );
						
						// Ajusta formato das datas
						$DATA_ATUAL = new \DateTime ( date ( 'Y-m-d H:i:s' ) );
						$DATA_LIMITE = new \DateTime ( $dhs_expira );
						
						// Executa difença das datas e separa em um objeto
						$diff = date_diff ( $DATA_ATUAL, $DATA_LIMITE );
						
						// Calcula em minutos a diferençadas datas
						$DIFF_SOLICITACAO = $diff->i + ($diff->days * 24 * 60) + ($diff->h * 60);
						
						// Verifica se a diferenÃ§a é positiva ou negativa
						$DIFF_SOLICITACAO = ($diff->invert ? $DIFF_SOLICITACAO * - 1 : $DIFF_SOLICITACAO);
						
						// Verifica se o token passou do período máximo de validade
						if ($DIFF_SOLICITACAO > 0) {
							
							// Busca ultimo token gerado para o usuario
							$objUltimoToken = \App\ta_recupera_senha::where('id_usuario', $id_usuario)->where('token', $token)->get()
									->max ( 'dhs_cadastro' );
							
							// Verifica se foi o último token gerado pelo usuario
							if ($objUltimoToken == $dhs_cadastro) {
							} else {
								// não foi o último token
								Session::flash ( 'error', 'Não foi possível prosseguir com o procedimento pois existe um token mais recente para este usuário.' );
								$objReturn = $this->msgReturn('error', 'Não foi possível prosseguir com o procedimento pois existe um token mais recente para este usuário.' );
								throw new \Exception ( 'Não foi possível prosseguir com o procedimento pois existe um token mais recente para este usuário.' );
							}
						} else {
							// token expirou
							Session::flash ( 'error', 'Não foi possível prosseguir com o procedimento pois a validade do token expirou.' );
							$objReturn = $this->msgReturn('error', 'Não foi possível prosseguir com o procedimento pois a validade do token expirou.');
							throw new \Exception ( 'Não foi possível prosseguir com o procedimento pois a validade do token expirou.' );
						}
					} else {
						// token jÃ¡ utilizado
						Session::flash ( 'error', 'Não foi possível prosseguir com o procedimento pois a validade do token expirou.' );
						throw new \Exception ( 'Não foi possível prosseguir com o procedimento pois o token já foi utilizado.' );
					}
				} else {
					// nao encontrou o token
					Session::flash ( 'error', 'Não foi possível prosseguir com o procedimento pois o token não está cadastrado no sistema.' );
					throw new \Exception ( 'Não foi possível prosseguir com o procedimento pois o token não está cadastrado no sistema.' );
				}
			}
		} catch(\Exception $e){
			
				 //dd($e->getMessage());
			     $objReturn['ERROR_MESSAGE'] = utf8_decode($e->getMessage());
// 			     /dd($objReturn);
				return view('usuario.recuperar-senha-erro', [ 'objReturn' => $objReturn ] );
				
		}
		return view ( 'usuario.recuperar-senha', compact ( 'id_usuario', 'token' ) );
	}
	
	public function resetaSenha(Request $request, $id_usuario, $token)
	{
		

		if ($request->isMethod ( 'post' )) {
		
			// Pesquisa na tabela usuario o login digitado
			$usuario = \App\ta_usuarios::where ( 'email', $request->input('email') )->get ()->first ();
		    $id_usuario_banco = $usuario->id_usuario;
			// Verifica se encontrou
			if (! is_null ( $usuario )) {
		
				if ( $id_usuario == $id_usuario_banco) {
						
					if ($request->input('senha') == $request->input('confirme_senha') ) {
		
						$objToken = \App\ta_recupera_senha::where('id_usuario', $id_usuario_banco)->get()->first();
		
						// dd($objUsuario);
						$usuario->senha = Hash::make ($request->input('senha'));
						$usuario->save();
		
						if ($usuario->save()) {
							// Busca a solicitação pelo token e pelo cod_usuario
								
							$objToken = \App\ta_recupera_senha::where ('id_usuario', $id_usuario)->where('token', $token)->get()->first();
									
								
							$objToken->utilizado = true;
								
							if ($objToken->save ()) {
								// SUCESSO!
								Session::flash ( 'success', 'Senha alterada com sucesso!!!' );
								
								//autorizando o login do usuário.
								\Auth::login($usuario, true);
								 
								return Redirect::to('/admin');
		
							} else {
								Session::flash ( 'danger', 'Não foi possível realizar a operação.' );
							}
						} else {
							Session::flash ( 'danger', 'Não foi possível realizar a operação.' );
						}
					} else {
						// Senha e confirmação de senha não são iguais
						Session::flash ( 'danger', 'Não foi possível realizar a operação. Os dados inseridos nos campos "Senha" e a "Confirmação da senha" não são iguais.' );
					}
				} else {
					// Email é diferente do id_usuario do token
					Session::flash ( 'danger', 'Não foi possível realizar a operação. Nome de usuÃ¡rio  incorreto. Email incorreto.' );
				}
			} else {
				// Usuário inexistente no sistema
				Session::flash ( 'danger', 'Não foi possível realizar a operação. Nome de usuÃ¡rio  incorreto. Email não encontrado.' );
			}
		}
		$senha = $usuario->senha;
		$email = $usuario->email;
		
		return Redirect::to ( '/login' );
	}
}