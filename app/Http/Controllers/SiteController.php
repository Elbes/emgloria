<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function foo\func;

class SiteController extends Controller
{
	public function index(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$galeria = new \App\tb_galeria();
		$imagens = $galeria->getGaleriaGeralInicio();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		$programacao = new \App\tb_programacao();
		$progra = $programacao->getProgramacaoAtivos();
		
		$video = new \App\tb_video();
		$video_inicio = $video->getVideoInicio();
		
		return view('/index' , compact('minAtivo', 'imagens', 'banners', 'devAtivo', 'progra', 'video_inicio'));
	}
	
	
	
	public function getSobre(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$sobre = new \App\tb_sobre();
		$missaoVisao = $sobre->getMissaoVisaoAtivos();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/sobre-igreja', compact('missaoVisao','minAtivo', 'banners', 'devAtivo'));
	}
	
	public function getPedidosOracao(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/pedidos-oracao', compact('minAtivo', 'banners', 'devAtivo'));
	}
	
	public function getAmorQueMove(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$galeria = new \App\tb_galeria();
		$imagens = $galeria->getGaleriaAmor();
		$img_primeira = $galeria->getAmorPrimeira();
		
		$video = new \App\tb_video();
		$videos = $video->getVideAmor();
		$video_primeiro = $video->getVideoAmorPrimeira();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/amor-que-move', compact('minAtivo', 'imagens', 'img_primeira', 'videos', 'video_primeiro', 'banners', 'devAtivo'));
	}
	
	public function getMinisterios($id_ministerio){
		$ministerio = new \App\tb_ministerio();
		$ministerios = $ministerio->getMinisteriosAtivos();
		$minDestaque = $ministerio->getMinisterioId($id_ministerio);
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/ministerios', compact('ministerios', 'minDestaque', 'minAtivo', 'banners', 'devAtivo'));
	}
	
	public function getContato(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/form-contato', compact('minAtivo', 'banners', 'devAtivo'));
	}
	
	public function getDevocional($id_devocional){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devocional = $dev->getDevocionalAtivos();
		
		$devDestaque = $dev->getDevocionalId($id_devocional);
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/devocional', compact('minAtivo', 'banners', 'devocional', 'devDestaque', 'devAtivo'));
	}
	
	public function getDoacoes(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/doacoes', compact('minAtivo', 'banners', 'devAtivo'));
	}
	
	public function getCultoOnline(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/culto-online', compact('minAtivo', 'banners', 'devAtivo'));
	}
	
	public function getGaleria(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
		
		$galeria = new \App\tb_galeria();
		$imagens = $galeria->getGaleriaGeral();
		$img_primeira = $galeria->getGaleriaPrimeira();
		
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
		
		$video = new \App\tb_video();
		$videos = $video->getVideoGeral();
		
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
		
		return view('/galeria', compact('minAtivo', 'imagens', 'img_primeira', 'banners', 'videos', 'devAtivo'));
	}
	
	public function getPastores(){
		$ministerio = new \App\tb_ministerio();
		$minAtivo = $ministerio->getMinisteriosAtivos()->first();
	
		$galeria = new \App\tb_galeria();
		$imagens = $galeria->getGaleriaGeral();
		$img_primeira = $galeria->getGaleriaPrimeira();
	
		$banner = new \App\tb_banner();
		$banners = $banner->getTodosBanners();
	
		$video = new \App\tb_video();
		$videos = $video->getVideoGeral();
	
		$dev = new \App\tb_devocional();
		$devAtivo = $dev->getDevocionalAtivos()->first();
	
		return view('/pastores', compact('minAtivo', 'imagens', 'img_primeira', 'banners', 'videos', 'devAtivo'));
	}
	
    public function guardaContato(Request $request){
    	$usuario = new \App\contato();
    	$usuario->nome = $request->input('nome');
		$usuario->email = $request->input('email');
		$usuario->telefone = $request->input('telefone');
		$usuario->assunto = $request->input('assunto');
		$usuario->mensagem = $request->input('mensagem');

		if ($usuario->save ()) {
			$data = array (
				'nome' => $request->input('nome'),
				'email' => $request->input('email'),
				'assunto' => $request->input('assunto'),
				'mensagem' => $request->input('mensagem'),
				'link' => 'http://efconsultoria.site'
			);
				Mail::send ( 'email-envia-contato', $data, function ($message) use ($data) {
						$message->to ('elbes2009@gmail.com', 'EF Consultoria' )->subject ( 'Teste' );
				} );
			     Session::flash ( 'success', 'Mensagem enviada com sucesso!!!' );
			} else {
				Session::flash ( 'error', 'Erro ao tentar inserir o Usuario!!!Tente Novamente.');
			}

		return Redirect::to ( '/' );
    }
    
    
}
