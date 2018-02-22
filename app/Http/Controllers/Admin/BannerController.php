<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
	public function index()
	{
		$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
		
		return view('admin.banner.inserirBanner', compact('usuario'));
	}
	
    public function getInserir()
    {   
        return view('admin.banner.inserir-banner');
    }
    
    public function getListaBanner()
    {
    	$usuario = \App\tb_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	 
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	 
    	return view('admin.banner.listaBanner', compact('usuario', 'perfis'));
    
    }

    //INSERIR BANNER NO BANCO E EM PASTA DO SERVIDOR
    public function inserirBanner(Request $request)
    {   
        $banner = new \App\tb_banner();
        $banner->banner_nome =  $request->input('banner_nome'); 
        $dt_atual = date('Y-m-d');
        $dias_validade = $request->input('banner_validade');
        $validade_banner =  date('Y-m-d', strtotime('+'.$dias_validade.' days', strtotime($dt_atual)));
        $banner->validade =  $validade_banner;
        $banner->banner_obs =  $request->input('banner_obs');
        $banner->prioridade =  $request->input('prioridade');
        $banner->id_usuario_cadastro = $request->input('id_usuario');
        
        $nome_original = Input::file('imagen_banner')->getClientOriginalName();
        $imageName = time().'_'. $nome_original;
        $extension = Input::file('imagen_banner')->getClientOriginalExtension();
         
        $banner->imagen_banner =  $imageName;
         
        if($extension != 'jpg' && $extension != 'png' && $extension != 'gif' && $extension && 'jpeg')
         {
         	Session::flash('error', 'O arquivo em anexo deve ser uma imagem!!!');
         }else{
         	if($banner->save()){
         		$request->imagen_banner->move(public_path('/imagens/banners/'), $imageName);
         		Session::flash('success', 'Banner inserido com sucesso!!!');
         	}else{
         		Session::flash('error', 'Erro ao tentar inserir o Banner!!!Tente Novamente.');
         	}
         }
         return Redirect::to('/listaBanner');
    }
    
    //LISTA DADOS DO BANNER NA VIEW PARA ALTERAR
    public function getAlterarBanner($id_banner)
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	$perfil = new \App\tb_perfil();
    	$perfis = $perfil->getTodosPerfis();
    	
    	$banner = \App\tb_banner::withTrashed()->find( $id_banner );
    	
    	if ($banner == null) {
    		// Está inativo no banco de dados =P
    		Session::flash('warning', 'Banner não encontrado!!!');
    		return Redirect::to('/listaBanner');
    	}else{
    		return view('admin.banner.alterarBanner', compact('banner', 'usuario', 'perfis'));
    	}
    	
    }
    
    //FUNÇÃO PARA ALTERA DADOS DO BANNER
    public function alterarBanner(Request $request){
    	
    	$banner = \App\tb_banner::withTrashed()->find( $request->input('id_banner') );
    	
    	$banner->banner_nome =  $request->input('banner_nome');
    	$validade_atual = $request->input('validade_atual');
    	$dias_validade = $request->input('banner_validade');
    	if($dias_validade == null){
    		$validade_banner = $validade_atual;
    	}else {
    		$validade_banner = date('Y-m-d', strtotime('+'.$dias_validade.' days', strtotime($validade_atual)));
    	}
    	$banner->validade =  $validade_banner;
    	$banner->banner_obs =  $request->input('banner_obs');
    	$banner->prioridade =  $request->input('prioridade');
    	
    	if($banner->save()){
    		Session::flash('success', 'Banner alterado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar alterar o Banner!!!\nTente Novamente.');
    	}
    	return Redirect::to('/listaBanner');
    }
    
    
    //LISTAR BANNER NA DATATABLE
    public function getListaBannerJson()
    {
    	$banner = new \App\tb_banner();
    	return $banner->getDtBanner();
    		
    }

    //EXCLUIR BANNER DEFINITIVAMENTE
    public function excluirBanner($id_banner )
    {  
    	$banner = \App\tb_banner::withTrashed()->find( $id_banner )->get()->first();
        if($banner->forceDelete()){
        	unlink(public_path('/imagens/banners/'.$banner->imagen_banner));
        	Session::flash('success', 'Banner '.$banner->banner_nome.' excluído com sucesso!!!');
        }else{
            Session::flash('error', ' Erro ao tentar excluir o Banner '.$banner->banner_nome.' !!!');
        }
        return Redirect::to('/listaBanner');
    }
    
    //INATIVAR BANNER - EXCLUSÃO LÓGICA
    public function inativarBanner($id_banner)
    {
    
    	$banner = \App\tb_banner::find( $id_banner );
    
    	if($banner->delete()){
    		Session::flash('success', 'Desativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar desativar Banner!!!');
    	}
    	return Redirect::to('/listaBanner');
    
    }
    
    //REATIVAR BANNER DA EXCLUSÃO LÓGICA
    public function ativarBanner($id_banner )
    {
    	$banner = \App\tb_banner::where('id_banner', $id_banner );
    	
    	if($banner->restore()){
    		Session::flash('success', 'Ativado com sucesso!!!');
    	}else{
    		Session::flash('error', 'Erro ao tentar ativar Banner!!!');
    	}
    	return Redirect::to('/listaBanner');
    }
    
    //EXIBE BANNER NA VIEW home
    public function mostraBanner(){
    	$banner = new \App\tb_banner;
    	$banners = $banner->getTodosBanners();
    	return view('/home', compact('banners'));
    	
    }

}