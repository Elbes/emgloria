<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class MinisterioController extends Controller
{
	
    public function getListaMinisterio()
    {   
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
        return view('admin.ministerio.listaMinisterio', compact('usuario'));
    }
    
    public function getInserirMinisterio()
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	 
    	return view('admin.ministerio.inserirMinisterio', compact('usuario'));
    }

    //INSERIR MINISTÉRIO NO BANCO
    public function inserirMinisterio(Request $request)
    {   
        $ministerio = new \App\tb_ministerio();
        $ministerio->nome_ministerio =  strtoupper($request->input('nome_ministerio')); 
        $ministerio->texto_ministerio =  $request->input('texto_ministerio');
        $ministerio->obs_ministerio =  $request->input('obs_ministerio');
        $ministerio->lider_ministerio =  $request->input('lider_ministerio');
        $ministerio->colider_ministerio =  $request->input('colider_ministerio');
        $ministerio->id_usuario_cadastro = $request->input('id_usuario');
             
        if($ministerio->save()){
         		Session::flash('success', 'Ministério inserido com sucesso!!!');
         	}else{
         		Session::flash('error', 'Erro ao tentar inserir o Ministério!!!Tente Novamente.');
         	}
         return Redirect::to('/listaMinisterio');
    }
    
    //LISTA DADOS DO MINISTÉRIO NA VIEW PARA ALTERAR
    public function getAlterarMinisterio($id_ministerio)
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	
    	$ministerio = \App\tb_ministerio::withTrashed()->find( $id_ministerio );
    	
    	if ($ministerio == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Ministério não encontrado!!!');
    		return Redirect::to('/inserirMinisterio');
    	}else{
    		return view('admin.ministerio.alterarMinisterio', compact('ministerio', 'usuario', 'perfis'));
    	}
    	
    }
    
    //FUNÇÃO PARA ALTERA DADOS DO BANNER
    public function alterarMinisterio(Request $request){
    	
    	$ministerio = \App\tb_ministerio::withTrashed()->find( $request->input('id_ministerio'));
    	
        $ministerio->nome_ministerio =  $request->input('nome_ministerio'); 
        $ministerio->texto_ministerio =  $request->input('texto_ministerio');
        $ministerio->obs_ministerio =  $request->input('obs_ministerio');
        $ministerio->lider_ministerio =  $request->input('lider_ministerio');
        $ministerio->colider_ministerio =  $request->input('colider_ministerio');
        $ministerio->id_usuario_cadastro = $request->input('id_usuario');
    	
    	if($ministerio->save()){
    		Session::flash('success', 'Ministério alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar o Ministério!!!\nTente Novamente.');
    	}
    	return Redirect::to('/listaMinisterio');
    }
    
    
    //LISTAR BANNER NA DATATABLE
    public function getListaMinisterioJson()
    {
    	$ministerio = new \App\tb_ministerio();
    	return $ministerio->getDtMinisterios();
    		
    }

    //EXCLUIR BANNER DEFINITIVAMENTE
    public function excluirMinisterio($id_ministerio )
    {  
    	$ministerio = \App\tb_ministerio::find( $id_ministerio);
        if($ministerio->forceDelete()){
        	Session::flash('success', 'Ministério '.$ministerio->nome_ministerio.' excluído com sucesso!!!');
        }else{
            Session::flash('error', ' Erro ao tentar excluir o Ministério '.$ministerio->nome_ministerio.' !!!');
        }
        return Redirect::to('/listaMinisterio');
    }
    
    //INATIVAR MINISTÉRIO - EXCLUSÃO LÓGICA
    public function inativarMinisterio($id_ministerio)
    {
    
    	$ministerio = \App\tb_ministerio::find( $id_ministerio );
    
    	if($ministerio->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar Ministério!!!');
    	}
    	return Redirect::to('/listaMinisterio');
    
    }
    
    //REATIVAR MINISTÉRIO DA EXCLUSÃO LÓGICA
    public function ativarMinisterio($id_ministerio )
    {
    	$ministerio = \App\tb_ministerio::where('id_ministerio', $id_ministerio );
    	
    	if($ministerio->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar Ministério!!!');
    	}
    	return Redirect::to('/listaMinisterio');
    }
    

}