<?php

namespace App\Http\Controllers\intranetAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class AdminConteudoController extends Controller
{
	//PÁGINA DE INSERÇÃO DE CONTEÚDO
	public function index()
	{
		$id_setor = Auth::user()->id_setor;
		
		$pagina_result = \App\ta_paginas::where('id_setor', $id_setor)->get();
		
		$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	//$setor = $usuario->setor;
		
		return view('admin.conteudoPagina', compact('pagina_result', 'usuario'));
	}
	
	//FUNCÇÃO PARA INSERIR O CONTEÚDO NO BANCO
    public function inserirConteudo(Request $request)
    {   
    	$conteudo = new \App\ta_conteudo();
    	$conteudo->titulo_conteudo =  $request->input('titulo_conteudo');
    	$conteudo->pagina_conteudo =  $request->input('pagina_conteudo');
    	$conteudo->id_pagina =  $request->input('id_pagina');
    	$id_usuario = $request->input('id_usuario');
    	$conteudo->id_usuario_cadastro =  $id_usuario;
    	
    	if($conteudo->save()){
    			Session::flash('success', 'Conteúdo inserido com sucesso!!!');
    		}else{
    			Session::flash('error', 'Erro ao tentar inserir o Conteúdo!!!Tente Novamente.');
    		}
    	
    	return Redirect::to('/conteudoPagina');
    	}
    
	//LISTA DADOS DO CONTEÚDO NA VIEW PARA ALTERAR
    public function getAlterarConteudo($id_conteudo )
    {
    	$conteudos = new \App\ta_conteudo();
    	$conteudo = $conteudos->getConteudoId( $id_conteudo );
    	foreach ($conteudo as $cont)
    	{
    		$id_pagina = $cont->id_pagina;
    	}
    	
    	$pagina = new \App\ta_paginas();
    	$pagina_result = $pagina->getPaginaId($id_pagina);
    	
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
//     	$setor = $usuario->setor;
    	
    	if ($conteudo == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Conteúdo não encontrado!!!');
    		return Redirect::to('/meus-conteudos');
    	}else{
    		return view('admin.alterarConteudo', compact('conteudo', 'pagina_result', 'usuario'));
    	}
    	
    }
    
    //FUNÇÃO PARA ALTERA DADOS DO CONTEÚDO
    public function alterarConteudo(Request $request){
    	
    	$id_conteudo = $request->input('id_conteudo');
    	$conteudo = \App\ta_conteudo::withTrashed()->find( $id_conteudo);
    	
    	$conteudo->titulo_conteudo =  $request->input('titulo_conteudo');
    	$conteudo->pagina_conteudo =  $request->input('pagina_conteudo');
    	$id_usuario = $request->input('id_usuario');
    	$conteudo->id_usuario_atualizacao =  $id_usuario;;
    	
    	if($conteudo->save()){
    		Session::flash('success', 'Conteúdo alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar o Conteúdo!!!Tente Novamente.');
    	}
    	return Redirect::to('/meus-conteudos');
    }
    
    public function getListaConteudo()
    {
    	$id_setor = Auth::user()->id_setor;
    	$pagina_result = \App\ta_paginas::where('id_setor', $id_setor)->get();
    	
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
//     	$setor = $usuario->setor;
    	
    	return view('admin.meusConteudos', compact('pagina_result', 'usuario'));
    }
    
    //LISTAR CONTEÚDO NA DATATABLE
    public function getListaConteudoJson($id_pagina)
    {
    	
    	$conteudo = new \App\ta_conteudo();
    	return $conteudo->getConteudo($id_pagina);
      
    }

    //EXCLUIR CONTEÚDO DEFINITIVAMENTE
    public function excluirConteudo($id_conteudo )
    {  
    	$conteudo = \App\ta_conteudo::withTrashed()->find( $id_conteudo );

        if($conteudo->forceDelete()){
        	Session::flash('success', 'Conteúdo '.$conteudo->titulo_conteudo.' excluído com sucesso!!!');
        }else{
            Session::flash('error', ' Erro ao tentar excluir o Banner '.$conteudo->titulo_conteudo.' !!!');
        }
        return Redirect::to('/meus-conteudos');
    }
    
    //INATIVAR CONTEÚDO - EXCLUSÂ LÓGICA
    public function inativarConteudo($id_conteudo )
    {
    
    	$conteudo = \App\ta_conteudo::find( $id_conteudo );
    
    	if($conteudo->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar Conteúdo!!!');
    	}
    	return Redirect::to('/meus-conteudos');
    
    }
    
    //REATIVAR CONTEÚDO DA EXCLUSÃO LÓGICA
    public function ativarConteudo($id_conteudo )
    {
    	$conteudo = \App\ta_conteudo::where('id_conteudo', $id_conteudo );
    	
    	if($conteudo->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar Conteúdo!!!');
    	}
    	
    	return Redirect::to('meus-conteudos');
    }
    
    //EXIBE BANNER NA VIEW home
    public function mostraBanner(){
    	$banner = new \App\ta_banner;
    	$banners = $banner->getTodosBanners();
    	return view('/home', compact('banners'));
    	
    }
}