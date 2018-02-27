<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
	public function index()
	{
		$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
		
		return view('admin.galeria.listaVideo', compact('usuario'));
	}
	
    public function getInserir()
    {   
        return view('admin.galeria.inserirVideo');
    }
    
    public function getListaVideo()
    {
    	$usuario = \App\tb_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	 
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	 
    	return view('admin.galeria.listaVideo', compact('usuario', 'perfis'));
    
    }

    //INSERIR IMAGEM NO BANCO E EM PASTA DE GALERIA DO SERVIDOR
    public function inserirVideo(Request $request)
    {   
    	
    	 
    	if($request->hasFile('nome_video')){
    		/* $imagem_galeria = $request->hasFile('imagem_galeria');
    		
    			$nome_original = $imagem_galeria->getClientOriginalName();
    			$imageName = time().'_'. $nome_original;
    			$extension = $imagem_galeria->getClientOriginalExtension(); */
    			$video = new \App\tb_video();
    			
    			
    			$nome_original = Input::file('nome_video')->getClientOriginalName();
    			$videoName = time().'_'. $nome_original;
    			$extension = Input::file('nome_video')->getClientOriginalExtension();
    			
    			$video->nome_video=  $videoName;
    			$video->tipo_video =  $request->input('tipo_video');
    			$video->obs_video =  $request->input('obs_video');
    			 
    			if($extension != 'avi' && $extension != 'mov' && $extension != 'wmv' && $extension != 'mp4' && $extension != 'mkv')
    			{
    				Session::flash('error', 'O arquivo em anexo deve ser um vídeo!!!');
    				return Redirect::to('/inserirVideo');
    			}else{
    				if($video->save()){
    					$request->nome_video->move(public_path('/videos/galeria/'), $videoName);
    					Session::flash('success', 'Inserido com sucesso!!!');
    				}else{
    					Session::flash('error', 'Erro ao tentar inserir !!!Tente Novamente.');
    				}
    			}
    			  		
    }
    return Redirect::to('/listaVideo');
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
    public function getListaVideoJson()
    {
    	$video = new \App\tb_video();
    	return $video->getDtVideo();
    		
    }

    //EXCLUIR IMAGEM DEFINITIVAMENTE
    public function excluirGaleria($id_galeria )
    {  
    	$galeria = \App\tb_galeria::withTrashed()->find( $id_galeria )->get()->first();
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