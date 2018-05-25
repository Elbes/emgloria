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

        $nome_original = Input::file('foto_ministerio')->getClientOriginalName();
        $imageName = time().'_'. $nome_original;
        $extension = Input::file('foto_ministerio')->getClientOriginalExtension();
        $ministerio->foto_ministerio =  $imageName;

        if($extension != 'jpg' && $extension != 'png' && $extension != 'gif' && $extension && 'jpeg')
            {
                Session::flash('error', 'O arquivo em anexo deve ser uma imagem!!!');
            }else{

            if( $request->foto_ministerio->move(public_path('/imagens/ministerios/'), $imageName) && $ministerio->save()){
             		Session::flash('success', 'Ministério inserido com sucesso!!!');
             	}else{
             		Session::flash('error', 'Erro ao tentar inserir o Ministério!!!Tente Novamente.');
             	}
             return Redirect::to('/listaMinisterio');
        }
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

         if(Input::file('foto_ministerio_nova') == NULL){
                $imageName = $ministerio->foto_ministerio;
                $ministerio->foto_ministerio = $imageName;
                if($ministerio->save()){
                    Session::flash('success', 'Alterado com sucesso!!!');
                }else{
                    Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
                }
           }

           else {
                if($ministerio->foto_ministerio){
                    unlink(public_path('/imagens/ministerios/'.$ministerio->foto_ministerio));
                }
                
                $imageName = $ministerio->foto_ministerio_nova;
                $nome_original = Input::file('foto_ministerio_nova')->getClientOriginalName();
                $imageName = time().'_'. $nome_original;
                $extension = Input::file('foto_ministerio_nova')->getClientOriginalExtension();
                
                $ministerio->foto_ministerio = $imageName;
           
                if($extension != 'jpg' && $extension != 'png' && $extension != 'gif' && $extension && 'jpeg')
                {
                    Session::flash('error', 'O arquivo em anexo deve ser uma imagem!!!');
                }else{
                    if($ministerio->save()){
                        $request->foto_ministerio_nova->move(public_path('/imagens/ministerios/'), $imageName);
                        Session::flash('success', 'Alterado com sucesso!!!');
                    }else{
                    Session::flash('error', 'Erro ao tentar alterar!!!\nTente Novamente.');
                  }
    	   return Redirect::to('/listaMinisterio');
         }
     }
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
            unlink(public_path('/imagens/ministerios/'.$ministerio->foto_ministerio));
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