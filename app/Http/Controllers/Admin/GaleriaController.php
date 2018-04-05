<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class GaleriaController extends Controller
{
	public function index()
	{
		$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
		
		return view('admin.galeria.listaGaleria', compact('usuario'));
	}
	
    public function getInserir()
    {   
        return view('admin.galeria.inserirGaleria');
    }
    
    public function getListaGaleria()
    {
    	$usuario = \App\tb_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	 
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	 
    	return view('admin.galeria.listaGaleria', compact('usuario', 'perfis'));
    
    }

    //INSERIR IMAGEM NO BANCO E EM PASTA DE GALERIA DO SERVIDOR
    public function inserirGaleria(Request $request)
    {   
    	
    	 
    	if($request->hasFile('imagem_galeria')){
    		/* $imagem_galeria = $request->hasFile('imagem_galeria');
    		
    			$nome_original = $imagem_galeria->getClientOriginalName();
    			$imageName = time().'_'. $nome_original;
    			$extension = $imagem_galeria->getClientOriginalExtension(); */
    			$galeria = new \App\tb_galeria();
    			
    			
    			$nome_original = Input::file('imagem_galeria')->getClientOriginalName();
    			$imageName = time().'_'. $nome_original;
    			$extension = Input::file('imagem_galeria')->getClientOriginalExtension();
    			
    			$galeria->nome_imagem =  $imageName;
    			$galeria->tipo_imagem =  $request->input('tipo_imagem');
    			$galeria->obs_imagem =  $request->input('obs_imagem');
    			/*  
    			if($extension != 'jpg' || $extension != 'png' || $extension != 'gif' || $extension && 'jpeg' || $extension != 'JPG')
    			{
    				Session::flash('error', 'O arquivo em anexo deve ser uma imagem!!!');
    			}else{ */
    				if($galeria->save()){
    					$request->imagem_galeria->move(public_path('/imagens/galeria/'), $imageName);
    					Session::flash('success', 'Inserido com sucesso!!!');
    				}else{
    					Session::flash('error', 'Erro ao tentar inserir !!!Tente Novamente.');
    				}
    			/* } */
    			  		
    }
    return Redirect::to('/listaGaleria');
    }
    
    //LISTA DADOS DA IMAGEM NA VIEW PARA ALTERAR
    public function getAlterarGaleria($id_galeria)
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	
    	$galeria = \App\tb_galeria::withTrashed()->find( $id_galeria );
    	
    	if ($galeria == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Imagem não encontrada!!!');
    		return Redirect::to('/listaGaleria');
    	}else{
    		return view('admin.galeria.alterarGaleria', compact('galeria', 'usuario', 'perfis'));
    	}
    	
    }
    
    //FUNÇÃO PARA ALTERA DADOS DA IMAGEM
    public function alterarGaleria(Request $request){
    	
    	$galeria = \App\tb_galeria::withTrashed()->find( $request->input('id_galeria') );
    	$galeria->tipo_imagem =  $request->input('tipo_imagem');
    	$galeria->obs_imagem =  $request->input('obs_imagem');
    	
    	if($galeria->save()){
    		Session::flash('success', 'Alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
    	}
    	return Redirect::to('/listaGaleria');
    }
    
    
    //LISTAR BANNER NA DATATABLE
    public function getListaGaleriaJson()
    {
    	$galeria = new \App\tb_galeria();
    	return $galeria->getDtGaleria();
    		
    }

    //EXCLUIR IMAGEM DEFINITIVAMENTE
    public function excluirGaleria($id_galeria )
    {  
    	//$galeria = \App\tb_galeria::withTrashed()->find( $id_galeria )->get()->first();
    	
    	$galeria = \App\tb_galeria::where('id_galeria', $id_galeria )->get()->first();
    	
        if($galeria->forceDelete()){
        	unlink(public_path('/imagens/galeria/'.$galeria->nome_imagem));
        	Session::flash('success', 'Imagem '.$galeria->nome_imagem.' excluída com sucesso!!!');
        }else{
            Session::flash('error', ' Erro ao tentar excluir imagem '.$galeria->nome_imagem.' !!!');
        }
        return Redirect::to('/listaGaleria');
    }
    
    //INATIVAR IMAGEM - EXCLUSÃO LÓGICA
    public function inativarGaleria($id_galeria)
    {
    
    	$galeria = \App\tb_galeria::find( $id_galeria );
    
    	if($galeria->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar!!!');
    	}
    	return Redirect::to('/listaGaleria');
    
    }
    
    //REATIVAR IMAGEM DA EXCLUSÃO LÓGICA
    public function ativarGaleria($id_galeria )
    {
    	$galeria = \App\tb_galeria::where('id_galeria', $id_galeria );
    	
    	if($galeria->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar!!!');
    	}
    	return Redirect::to('/listaGaleria');
    }
    

}