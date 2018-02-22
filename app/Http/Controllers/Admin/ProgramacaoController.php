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

    //INSERIR MINISTÉRIO NO BANCO
    public function inserirDevocional(Request $request)
    {   
        $devocional = new \App\tb_devocional();
        $devocional->titulo =  strtoupper($request->input('titulo')); 
        $devocional->texto =  $request->input('texto');
             
        if($devocional->save()){
         		Session::flash('success', 'Inserido com sucesso!!!');
         	}else{
         		Session::flash('error', 'Erro ao tentar inserir!!!Tente Novamente.');
         	}
         return Redirect::to('/listaDevocional');
    }
    
    //LISTA DADOS DO DEVOCIONAL NA VIEW PARA ALTERAR
    public function getAlterarDevocional($id_devocional)
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	
    	$devocional = \App\tb_devocional::withTrashed()->find( $id_devocional );
    	
    	if ($devocional == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Devocional não encontrado!!!');
    		return Redirect::to('/listaDevocional');
    	}else{
    		return view('admin.devocional.alterarDevocional', compact('devocional', 'usuario', 'perfis'));
    	}
    	
    }
    
    //FUNÇÃO PARA ALTERA DADOS DO DEVOCIONAL
    public function alterarDevocional(Request $request){
    	
    	$devocional = \App\tb_devocional::withTrashed()->find( $request->input('id_devocional'));
    	
        $devocional->titulo =  strtoupper($request->input('titulo')); 
        $devocional->texto =  $request->input('texto');
    	
    	if($devocional->save()){
    		Session::flash('success', 'Alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
    	}
    	return Redirect::to('/listaDevocional');
    }
    
    
    //LISTAR DEVOCIONAL NA DATATABLE
    public function getListaDevocionalJson()
    {
    	$devocional = new \App\tb_devocional();
    	return $devocional->getDtDevocional();
    		
    }
    
    //INATIVAR DEVOCIONAL - EXCLUSÃO LÓGICA
    public function inativarDevocional($id_devocional)
    {
    
    	$devocional = \App\tb_devocional::find( $id_devocional );
    
    	if($devocional->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar!!!');
    	}
    	return Redirect::to('/listaDevocional');
    
    }
    
    //REATIVAR DEVOCIONAL DA EXCLUSÃO LÓGICA
    public function ativarDevocional($id_devocional )
    {
    	$devocional = \App\tb_devocional::where('id_devocional', $id_devocional );
    	
    	if($devocional->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar!!!');
    	}
    	return Redirect::to('/listaDevocional');
    }
    

}