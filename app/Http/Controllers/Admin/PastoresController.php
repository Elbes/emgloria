<?php

namespace App\Http\Controllers\Admin;

use App\tb_pastores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PastoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListaPastor()
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
        return view('admin.pastores.listaPastores', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInserir()
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	return view('admin.pastores.inserirPastores', compact('usuario'));
    }
    
    public function inserirPastor(Request $request){
    	
    	if($request->hasFile('foto_pastor')){
    	
    		$pastores = new \App\tb_pastores();
    		 
    		$nome_original = Input::file('foto_pastor')->getClientOriginalName();
    		$imageName = time().'_'. $nome_original;
    		$extension = Input::file('foto_pastor')->getClientOriginalExtension();
    		 
    		$pastores->nome_pastor =  $request->input('nome_pastor');
    		$pastores->foto_pastor =  $imageName;
    		$pastores->funcao_pastor =  $request->input('funcao_pastor');
    		$pastores->obs_pastor =  $request->input('obs_pastor');
    	
    		if($extension != 'jpg' && $extension != 'png' && $extension != 'gif' && $extension && 'jpeg')
    		{
    			Session::flash('error', 'O arquivo em anexo deve ser uma imagem!!!');
    		}else{
    			if($pastores->save()){
    				$request->foto_pastor->move(public_path('/imagens/pastores/'), $imageName);
    				Session::flash('success', 'Inserido com sucesso!!!');
    			}else{
    				Session::flash('error', 'Erro ao tentar inserir !!!Tente Novamente.');
    			}
    		}
    			
    	}
    	return Redirect::to('/listaPastores');
    }
    	

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getListaPastorJson()
    {
        $pastores = new \App\tb_pastores();
    	return $pastores->getDtPastores();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_pastores  $tb_pastores
     * @return \Illuminate\Http\Response
     */
    public function show(tb_pastores $tb_pastores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_pastores  $tb_pastores
     * @return \Illuminate\Http\Response
     */
  //LISTA DADOS DO PASTOR NA VIEW PARA ALTERAR
    public function getAlterarPastor($id_pastor)
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	
    	$pastor = \App\tb_pastores::withTrashed()->find( $id_pastor );
    	
    	if ($pastor == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Imagem não encontrada!!!');
    		return Redirect::to('/listaPastores');
    	}else{
    		return view('admin.pastores.alterarPastores', compact('pastor', 'usuario', 'perfis'));
    	}
    	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_pastores  $tb_pastores
     * @return \Illuminate\Http\Response
     */
	//FUNÇÃO PARA ALTERA DADOS DO PASTOR
    public function alterarPastor(Request $request){
    	
    	   $pastores= \App\tb_pastores::withTrashed()->find( $request->input('id_pastor') );
    	   
    	   $pastores->nome_pastor =  $request->input('nome_pastor');
    	   $pastores->funcao_pastor =  $request->input('funcao_pastor');
    	   $pastores->obs_pastor =  $request->input('obs_pastor');
    	   
    	   if(Input::file('foto_pastor_nova') == NULL){
    	   		$imageName = $pastores->foto_pastor;
    	   		$pastores->foto_pastor = $imageName;
    	   		if($pastores->save()){
    	   			Session::flash('success', 'Alterado com sucesso!!!');
    	   		}else{
    	   			Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
    	   		}
    	   }
    	   else {
	    	   	unlink(public_path('/imagens/pastores/'.$pastores->foto_pastor));
	    	   	$imageName = $pastores->foto_pastor_nova;
	    	   	$nome_original = Input::file('foto_pastor_nova')->getClientOriginalName();
	    	   	$imageName = time().'_'. $nome_original;
	    	   	$extension = Input::file('foto_pastor_nova')->getClientOriginalExtension();
	    	   	
	    	   	$pastores->foto_pastor = $imageName;
    	   
	    	   	if($extension != 'jpg' && $extension != 'png' && $extension != 'gif' && $extension && 'jpeg')
	    	   	{
	    	   		Session::flash('error', 'O arquivo em anexo deve ser uma imagem!!!');
	    	   	}else{
	    	   		if($pastores->save()){
	    	   			$request->foto_pastor_nova->move(public_path('/imagens/pastores/'), $imageName);
	    	   			Session::flash('success', 'Alterado com sucesso!!!');
	    	   		}else{
	    	   		Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
	    	   		}
    	   		}
    	   }
    		
    	return Redirect::to('/listaPastores');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_pastores  $tb_pastores
     * @return \Illuminate\Http\Response
     */
     //EXCLUIR PASTOR DEFINITIVAMENTE
    public function excluirPastor($id_pastor)
    {  
    	$pastor = \App\tb_pastores::withTrashed()->find( $id_pastor )->get()->first();
        if($pastor->forceDelete()){
        	unlink(public_path('/imagens/pastores/'.$pastor->foto_pastor));
        	Session::flash('success', 'Imagem '.$pastor->foto_pastor.' excluída com sucesso!!!');
        }else{
            Session::flash('error', ' Erro ao tentar excluir imagem '.$pastor->foto_pastor.' !!!');
        }
        return Redirect::to('/listaPastores');
    }
    
    //INATIVAR PASTOR - EXCLUSÃO LÓGICA
    public function inativarPastor($id_pastor)
    {
    
    	$pastor = \App\tb_pastores::find( $id_pastor );
    
    	if($pastor->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar!!!');
    	}
    	return Redirect::to('/listaPastores');
    
    }
    
    //REATIVAR PASTOR DA EXCLUSÃO LÓGICA
    public function ativarPastor($id_pastor )
    {
    	$pastor = \App\tb_pastores::where('id_pastor', $id_pastor );
    	
    	if($pastor->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar!!!');
    	}
    	return Redirect::to('/listaPastores');
    }
}
