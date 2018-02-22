<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ProgramacaoController extends Controller
{
	
    public function getListaProgramacao()
    {   
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
        return view('admin.programacao.listaProgramacao', compact('usuario'));
    }
    
    public function getInserir()
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	 
    	return view('admin.programacao.inserirProgramacao', compact('usuario'));
    }

    //INSERIR PROGRAMAÇÃO NO BANCO
    public function inserirProgramacao(Request $request)
    {   
        $programacao = new \App\tb_programacao();
        $programacao->dia_programacao =  $request->input('dia_programacao'); 
        $programacao->texto_programacao =  $request->input('texto_programacao');
        $programacao->prioridade =  $request->input('prioridade');
             
        if($programacao->save()){
         		Session::flash('success', 'Inserido com sucesso!!!');
         	}else{
         		Session::flash('error', 'Erro ao tentar inserir!!!Tente Novamente.');
         	}
         return Redirect::to('/listaProgramacao');
    }
    
    //LISTA DADOS DO PROGRAMAÇÃO NA VIEW PARA ALTERAR
    public function getAlterarProgramacao($id_programacao)
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	
    	$programacao= \App\tb_programacao::withTrashed()->find( $id_programacao );
    	
    	if ($programacao == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Programação não encontrada!!!');
    		return Redirect::to('/listaProgramacao');
    	}else{
    		return view('admin.programacao.alterarProgramacao', compact('programacao', 'usuario', 'perfis'));
    	}
    	
    }
    
    //FUNÇÃO PARA ALTERA DADOS DA PROGRAMAÇÃO
    public function alterarProgramacao(Request $request){
    	
    	$programacao = \App\tb_programacao::withTrashed()->find( $request->input('id_programacao'));
    	
        $programacao->dia_programacao =  $request->input('dia_programacao'); 
        $programacao->texto_programacao =  $request->input('texto_programacao');
        $programacao->prioridade =  $request->input('prioridade');
    	
    	if($programacao->save()){
    		Session::flash('success', 'Alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
    	}
    	return Redirect::to('/listaProgramacao');
    }
    
    
    //LISTAR PROGRAMAÇÃO NA DATATABLE
    public function getListaProgramacaoJson()
    {
    	$programacao = new \App\tb_programacao();
    	return $programacao->getDtProgramacao();
    		
    }
    
    //INATIVAR PROGRAMAÇÃO - EXCLUSÃO LÓGICA
    public function inativarProgramacao($id_programacao)
    {
    
    	$programacao = \App\tb_programacao::find( $id_programacao );
    
    	if($programacao->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar!!!');
    	}
    	return Redirect::to('/listaProgramacao');
    
    }
    
    //REATIVAR PROGRAMAÇÃO DA EXCLUSÃO LÓGICA
    public function ativarProgramacao($id_programacao )
    {
    	$programacao = \App\tb_programacao::where('id_programacao', $id_programacao );
    	
    	if($programacao->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar!!!');
    	}
    	return Redirect::to('/listaProgramacao');
    }
    
    //EXCLUIR PROGRAMAÇÃO DEFINITIVAMENTE
    public function excluirProgramacao($id_programacao )
    {
    	$programacao = \App\tb_programacao::withTrashed()->find( $id_programacao )->get()->first();
    	
    	if($programacao->forceDelete()){
    		Session::flash('success', 'Programação '.$programacao->texto_programacao.' excluído com sucesso!!!');
    	}else{
    		Session::flash('error', ' Erro ao tentar excluir o Programação '.$programacao->texto_programacao.' !!!');
    	}
    	return Redirect::to('/listaProgramacao');
    }
    

}