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
    
    //LISTA DADOS DO VÍDEO NA VIEW PARA ALTERAR
    public function getAlterarVideo($id_video)
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	
    	$video = \App\tb_video::withTrashed()->find( $id_video );
    	
    	if ($video == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Vídeo não encontrada!!!');
    		return Redirect::to('/listaVideo');
    	}else{
    		return view('admin.galeria.alterarVideo', compact('video', 'usuario', 'perfis'));
    	}
    	
    }
    
    //FUNÇÃO PARA ALTERA DADOS DO VÍDEO
    public function alterarVideo(Request $request){
    	
    	$video = \App\tb_video::withTrashed()->find( $request->input('id_video') );
    	$video->tipo_video =  $request->input('tipo_video');
    	$video->obs_video =  $request->input('obs_video');
    	
    	if($video->save()){
    		Session::flash('success', 'Alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
    	}
    	return Redirect::to('/listaVideo');
    }
    
    
    //LISTAR VÍDEO NA DATATABLE
    public function getListaVideoJson()
    {
    	$video = new \App\tb_video();
    	return $video->getDtVideo();
    		
    }

    //EXCLUIR VÍDEO DEFINITIVAMENTE
    public function excluirVideo($id_video )
    {  
    	$video = \App\tb_video::withTrashed()->find( $id_video)->get()->first();
       
        if($video->forceDelete()){
        	unlink(public_path('/videos/galeria/'.$video->nome_video));
        	Session::flash('success', 'Vídeo '.$video->nome_video.' excluído com sucesso!!!');
        }else{
            Session::flash('error', ' Erro ao tentar excluir vídeo '.$video->nome_video.' !!!');
        }
        return Redirect::to('/listaVideo');
    }
    
    //INATIVAR VÍDEO - EXCLUSÃO LÓGICA
    public function inativarVideo($id_video)
    {
    
    	$video = \App\tb_video::find( $id_video );
    
    	if($video->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar!!!');
    	}
    	return Redirect::to('/listaVideo');
    
    }
    
    //REATIVAR VÍDEO DA EXCLUSÃO LÓGICA
    public function ativarVideo($id_video )
    {
    	$video = \App\tb_video::where('id_video', $id_video );
    	
    	if($video->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar!!!');
    	}
    	return Redirect::to('/listaVideo');
    }
    

}