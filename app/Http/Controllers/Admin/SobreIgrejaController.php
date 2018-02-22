<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class SobreIgrejaController extends Controller
{
    
    public function getListaMissaoVisao()
    {
    	$usuario = \App\tb_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	 
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	 
    	return view('admin.sobre-igreja.listaMissaoVisao', compact('usuario', 'perfis'));
    
    }

    //LISTAR MISSÃO/VISÃO NA DATATABLE
    public function getListaMisaoVisaoJson()
    {
    	$missao = new \App\tb_sobre();
    	return $missao->getDtMissaoVisao();
    
    }
    
    //LISTA DADOS NA VIEW PARA ALTERAR
    public function getAlterarSobre($id_sobre)
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	
    	$sobre = \App\tb_sobre::withTrashed()->find( $id_sobre );
    	
    	if ($sobre == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Dados não encontrados!!!');
    		return Redirect::to('/listaMissaoVisao');
    	}else{
    		return view('admin.sobre-igreja.alterarSobre', compact('sobre', 'usuario', 'perfis'));
    	}
    	
    }
    
    //FUNÇÃO PARA ALTERA DADOS
    public function alterarSobre(Request $request){
    	
    	$sobre = \App\tb_sobre::withTrashed()->find( $request->input('id_sobre') );
    	
    	$sobre->titulo =  $request->input('titulo');
    	$sobre->texto = $request->input('texto');
    	
    	if($sobre->save()){
    		Session::flash('success', 'Alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
    	}
    	return Redirect::to('/listaMissaoVisao');
    }
    
    //INATIVAR TEXTO - EXCLUSÃO LÓGICA
    public function inativarSobre($id_sobre)
    {
    
    	$sobre = \App\tb_sobre::find( $id_sobre );
    
    	if($sobre->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar!!!');
    	}
    	return Redirect::to('/listaMissaoVisao');
    
    }
    
    //REATIVAR TEXTO DA EXCLUSÃO LÓGICA
    public function ativarSobre($id_sobre )
    {
    	$sobre = \App\tb_sobre::where('id_sobre', $id_sobre );
    	
    	if($sobre->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar!!!');
    	}
    	return Redirect::to('/listaMissaoVisao');
    }

}