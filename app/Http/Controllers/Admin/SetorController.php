<?php

namespace App\Http\Controllers\intranetAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class SetorController extends Controller
{
    public function index()
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	$menu = \App\ta_menu::all();
    	
    	return view('admin.ctinf.inserirSetor', compact('usuario', 'menu'));
    }
    
    //FUNÇÃO PARA INSERIR OS DADOS DO SETOR
    public function inserirSetor(Request $request)
    {
    	$setor = new \App\ta_setor();
        $pesq = \App\ta_setor::where('nome_setor', $request->input('nome_setor'))->get()->first();
        $pesq2 = \App\ta_setor::where('sigla_setor', $request->input('sigla_setor'))->get()->first();
        
        if(isset($pesq))
        {
        	Session::flash ( 'warning', 'Já existe setor cadastrado com este nome.' );
        }elseif (isset($pesq2))
        {
        	Session::flash ( 'warning', 'Já existe setor cadastrado com esta sigla.' );
        }else{
        	$setor->nome_setor =  $request->input('nome_setor');
        	$setor->sigla_setor =  $request->input('sigla_setor');
        	$setor->descricao_setor = $request->input('descricao_setor');
        	$setor->id_menu = $request->input('id_menu');
        	 
        	if($setor->save())
        	{
        		$pagina = new \App\ta_paginas();
        	
        		$pagina->pagina_nome = $request->input('nome_setor');
        		$pagina->id_setor = $setor->id_setor;
        			
        		if ($pagina->save())
        		{
        			Session::flash('success', 'Setor inserido com sucesso!!!');
        		}
        	}else {
        		Session::flash('error', 'Erro ao tentar inserir Setor!!!');
        	}
        }
    	
    	return Redirect::to('/inserirSetor');
    }
    
    //LISTAR SETOR NA DATATABLE
    public function getListaSetorJson()
    {
    	$setor = new \App\ta_setor();
    	return $setor->getDtSetor();
    
    }
    
    //LISTA DADOS DO SETOR NA VIEW PARA ALTERAR
    public function getAlterarSetor($id_setor )
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	//$setor = $usuario->setor;;
    	
    	$setor = \App\ta_setor::withTrashed()->find( $id_setor );
    	
    	$menu = \App\ta_menu::all();
    	if ($setor== null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Setor não encontrado!!!');
    		return Redirect::to('/inserirSetor');
    	}else{
    		return view('admin.ctinf.alterarSetor', compact('setor', 'usuario', 'menu'));
    	}
    }
    
    //FUNÇÃO PARA ALTERA DADOS DO SETOR
    public function alterarSetor(Request $request){
    	 
    	$setor = \App\ta_setor::withTrashed()->find( $request->input('id_setor') );
    	 
    	$setor->nome_setor =  $request->input('nome_setor');
    	$setor->sigla_setor =  $request->input('sigla_setor');
    	$setor->descricao_setor =  $request->input('descricao_setor');
    	$setor->id_menu =  $request->input('id_menu');
    	 
    	if($setor->save()){
    		Session::flash('success', 'Setor alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar o Setor!!!Tente Novamente.');
    	}
    	return Redirect::to('/inserirSetor');
    }
    
    public function excluirSetor($id_setor )
    {
    	$setor = \App\ta_setor::withTrashed()->find( $id_setor);
    
    	if($setor->forceDelete()){
    		Session::flash('success', 'Setor excluído com sucesso!!!');
    	}else{
    		Session::flash('error', ' Erro ao tentar excluir o Setor !!!');
    	}
    	return Redirect::to('/inserirSetor');
    }
    
    public function inativarSetor($id_setor )
    {
    	$setor = \App\ta_setor::withTrashed()->find( $id_setor );
    
    	if($setor->delete()){
    		Session::flash('success', 'Setor desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar Setor!!!');
    	}
    	return Redirect::to('/inserirSetor');
    
    }
    
    public function ativarSetor($id_setor )
    {
    	$setor = \App\ta_setor::withTrashed()->find( $id_setor );
    	 
    	if($setor->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar Setor!!!');
    	}
    	return Redirect::to('/inserirSetor');
    }
    
}
