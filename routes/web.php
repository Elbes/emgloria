<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

//ROTAS DE PÁGINAS DO SITE
Route::any('/', ['as' => 'home', 'uses' => 'SiteController@index']);

Route::any('/sobre-igreja', [
		'uses' => 'SiteController@getSobre'
]);

Route::any('/ministerios/{id_ministerio}', [
		'uses' => 'SiteController@getMinisterios'
]);

Route::any('/pedidos-oracao', [
		'uses' => 'SiteController@getPedidosOracao'
]);

Route::any('/amor-que-move', [
		'uses' => 'SiteController@getAmorQueMove'
]);

Route::any('/form-contato', [
		'uses' => 'SiteController@getContato'
]);

Route::any('/devocional/{id_devocional}', [
		'uses' => 'SiteController@getDevocional'
]);

Route::any('/doacoes', [
		'uses' => 'SiteController@getDoacoes'
]);

Route::any('/culto-online', [
		'uses' => 'SiteController@getCultoOnline'
]);

Route::any('/galeria-gloria', [
		'uses' => 'SiteController@getGaleria'
]);

Route::any('/pastores', [
		'uses' => 'SiteController@getPastores'
]);

Route::any('/envia-contato', [
		'uses' => 'SiteController@enviaContato'
]);

/* ROTAS DE AUTENTICACAO DO SISTEMA*/
Route::any('/login', [
		'as' => 'auth.login',
		'uses' => 'Auth\LoginController@login'
]);

Route::any('/entrar', [
		'uses' => 'Auth\LoginController@getEntrar'
]);

Route::any('/logout', [
		'uses' => 'Auth\LoginController@logout'
]);

 /* ROTAS DE AUTENTICACAO DO SISTEMA*/
Route::any('/login', [
		'as' => 'auth.login',
		'uses' => 'Auth\LoginController@login'
]);

Route::any('/entrar', [
		'uses' => 'Auth\LoginController@getEntrar'
]);

Route::any('/logout', [
		'uses' => 'Auth\LoginController@logout'
]);

/* ROTAS DE USUÁRIO*/
Route::any('/cadastro-usuario', [
		'as' => 'usuario.cadastro',
		'uses' => 'UsuarioController@getInserir'
]);

Route::any('/inserir-usuario', [
		'uses' => 'UsuarioController@inserirUsuario'
]);

Route::any('/listaUsuario', [
		'as' => 'usuario.listaUsuario',
		'uses' => 'UsuarioController@getListaUsuario'
]);

Route::any('/esqueceuSenha', [
		'as' => 'usuario.emailSenha',
		'uses' => 'UsuarioController@esqueceuSenha'
]);

Route::any('/envia-reseta-senha', [
		'uses' => 'UsuarioController@enviaEmail'
]);

Route::any('/recuperar-senha/{id_usuario}/{token}', [
		'uses' => 'UsuarioController@recuperarSenha'
]);

Route::any('/resetar-senha/{id_usuario}/{token}', [
		'uses' => 'UsuarioController@resetaSenha'
]);

Route::any('/meusDados', [
		'uses' => 'UsuarioController@getMeusDados'
]);

Route::any('/alterarSenha', [
		'uses' => 'UsuarioController@getAlterarSenha'
]);

Route::group(['prefix' => '/usuario'], function () {

	//Listar Usuários em DataTable
	Route::any('/lista-usuario.json', [
			'as' => 'usuario.lista-usuario.json',
			'uses' => 'UsuarioController@getListaUsuarioJson'
	]);
	
	Route::any('/excluir-usuario/{id_usuario?}', [
			'as' => 'usuario.excluir-usuario',
			'uses' => 'UsuarioController@excluirUsuario'
	]);
	
	Route::any('/inativar-usuario/{id_usuario?}', [
			'uses' => 'UsuarioController@inativarUsuario'
	]);
	
	Route::any('/ativar-usuario/{id_usuario?}', [
			'uses' => 'UsuarioController@ativarUsuario'
	]);
	
	Route::any('/alterar/{id_usuario?}', [
			'as' => 'usuario.alterar',
			'uses' => 'UsuarioController@getAlterarUsuario'
	]);
	
	Route::any('/alterar-usuario', [
			'as' => 'usuario.alterar-usuario',
			'uses' => 'UsuarioController@alterarUsuario'
	]);
	
	Route::any('/alterar-senha', [
			'as' => 'usuario.alterar-senha',
			'uses' => 'UsuarioController@alterarSenha'
	]);
	
	Route::any('/trocar-senha', [
			'as' => 'usuario.trocar-senha',
			'uses' => 'UsuarioController@trocarSenha'
	]);
	
});
//FIM USUÁRIO


//ROTAS DE VISUALIZACAO DA ÁREA ADMINISTRATIVA

Route::any('/admin', function () {
		return view('/admin/homeAdmin');
});

Route::get('/admin', array('uses'=>'Admin\HomeAdminController@index'));


Route::any('/inserirLink', [
		'as' => 'admin.ctinf.inserirLink',
		'uses' => 'Admin\LinkController@getInserir'
]);

Route::any('/inserirVideo', [
		'as' => 'admin.ctinf.inserirVideo',
		'uses' => 'intranetAdmin\VideoController@index'
]);

Route::any('/noticias-editor', array('uses'=>'intranet\PaginasController@mostraPagina'));

Route::any('/noticia', array('uses'=>'intranet\PaginasController@noticia'));




//FIM SUBMENUS

Route::any('/conteudoPagina', array('uses'=>'intranetAdmin\AdminConteudoController@index'));

Route::any('/meus-conteudos', array('uses'=>'intranetAdmin\AdminConteudoController@getListaConteudo'));

//ROTAS DA ADMINISTRAÇÃO DAS PÁGINAS
Route::group(['prefix' => '/admin'], function () {
	
	Route::any('/inserir-conteudo', [
			'uses' => 'intranetAdmin\AdminConteudoController@inserirConteudo'
	]);
	
	//Lista de conteúdos cadastrados em DataTable
     Route::any('/lista-conteudo.json/{id_pagina?}', [
    		'as' => 'admin.lista-conteudo.json',
    		'uses' => 'intranetAdmin\AdminConteudoController@getListaConteudoJson'
    ]);
	
	Route::any('/excluir-conteudo/{id_conteudo}', [
			'uses' => 'intranetAdmin\AdminConteudoController@excluirConteudo'
	]);
	
	Route::any('/inativar-conteudo/{id_conteudo?}', [
			'uses' => 'intranetAdmin\AdminConteudoController@inativarConteudo'
	]);
	
	Route::any('/ativar-conteudo/{id_conteudo?}', [
			'uses' => 'intranetAdmin\AdminConteudoController@ativarConteudo'
	]);
	
	Route::any('/alterar/{id_conteudo?}', [
			'as' => 'admin.alterar',
			'uses' => 'intranetAdmin\AdminConteudoController@getAlterarConteudo'
	]);
	
	Route::any('/alterar-conteudo', [
			'as' => 'admin.ascon.alterar-conteudo',
			'uses' => 'intranetAdmin\AdminConteudoController@alterarConteudo'
	]);
	
});

//ROTAS DOS BANNERS

Route::any('/inserirBanner', [
	'as' => 'admin.banner.inserirBanner',
	'uses' => 'Admin\BannerController@index'
]);
	
Route::any('/listaBanner', [
	'as' => 'admin.banner.listaBanner',
	'uses' => 'Admin\BannerController@getListaBanner'
]);
	
Route::group(['prefix' => '/admin/banner'], function () {
	//Inserção
	Route::post('/inserir-banner', [
			'uses' => 'Admin\BannerController@inserirBanner'
	]);
	
	//Listar Banner em DataTable
	Route::any('/lista-banner.json', [
			'as' => 'admin.banner.lista-banner.json',
			'uses' => 'Admin\BannerController@getListaBannerJson'
	]);
	
	Route::any('/excluir-banner/{id_banner?}', [
			'uses' => 'Admin\BannerController@excluirBanner'
	]);
	
	Route::any('/inativar-banner/{id_banner?}', [
			'uses' => 'Admin\BannerController@inativarBanner'
	]);
	
	Route::any('/ativar-banner/{id_banner?}', [
			'uses' => 'Admin\BannerController@ativarBanner'
	]);
	
	Route::any('/alterar-banner/{id_banner?}', [
			'as' => 'admin.banner.alterar-banner',
			'uses' => 'Admin\BannerController@getAlterarBanner'
	]);
	
	Route::any('/altera-banner', [
			'as' => 'admin.banner.altera-banner',
			'uses' => 'Admin\BannerController@alterarBanner'
	]);
});



//ROTAS DOS MINISTÉRIO

Route::any('/listaMinisterio', [
	'as' => 'admin.ministerio.listaMinisterio',
	'uses' => 'Admin\MinisterioController@getListaMinisterio'
]);

Route::any('/inserirMinisterio', [
	'as' => 'admin.ministerio.inserirMinisterio',
	'uses' => 'Admin\MinisterioController@getInserirMinisterio'
]);

Route::group(['prefix' => '/admin/ministerio'], function () {
	
	//Inserção
	Route::post('/inserir-ministerio', [
			'uses' => 'Admin\MinisterioController@inserirMinisterio'
	]);
	
	//Listar MINISTÉRIO em DataTable
	Route::any('/lista-ministerio.json', [
			'as' => 'admin.ministerio.lista-ministerio.json',
			'uses' => 'Admin\MinisterioController@getListaMinisterioJson'
	]);
	
	Route::any('/excluir-ministerio/{id_ministerio?}', [
			'uses' => 'Admin\MinisterioController@excluirMinisterio'
	]);
	
	Route::any('/inativar-ministerio/{id_ministerio?}', [
			'uses' => 'Admin\MinisterioController@inativarMinisterio'
	]);
	
	Route::any('/ativar-ministerio/{id_ministerio?}', [
			'uses' => 'Admin\MinisterioController@ativarMinisterio'
	]);
	
	Route::any('/alterar-ministerio/{id_ministerio?}', [
			'as' => 'admin.ministerio.alterar-ministerio',
			'uses' => 'Admin\MinisterioController@getAlterarMinisterio'
	]);
	
	Route::any('/altera-ministerio', [
			'as' => 'admin.ministerio.altera-ministerio',
			'uses' => 'Admin\MinisterioController@alterarMinisterio'
	]);
});

	//ROTAS DA GALERIA
	
Route::any('/listaGaleria', [
		'as' => 'admin.galeria.listaGaleria',
		'uses' => 'Admin\GaleriaController@getListaGaleria'
]);
	
Route::any('/inserirGaleria', [
		'as' => 'admin.galeria.inserirGaleria',
		'uses' => 'Admin\GaleriaController@getInserir'
]);

Route::any('/listaVideo', [
		'as' => 'admin.galeria.listaVideo',
		'uses' => 'Admin\VideoController@getListaVideo'
]);

Route::any('/inserirVideo', [
		'as' => 'admin.galeria.inserirVideo',
		'uses' => 'Admin\VideoController@getInserir'
]);
	
Route::group(['prefix' => '/admin/galeria'], function () {
	
		//INSERÇÃO DE IMAGEM
		Route::post('/inserir-galeria', [
				'uses' => 'Admin\GaleriaController@inserirGaleria'
		]);
	
		//Listar IMAGENS em DataTable
		Route::any('/lista-galeria.json', [
				'as' => 'admin.galeria.lista-galeria.json',
				'uses' => 'Admin\GaleriaController@getListaGaleriaJson'
		]);
	
		Route::any('/excluir-galeria/{id_galeria?}', [
				'uses' => 'Admin\GaleriaController@excluirGaleria'
		]);
	
		Route::any('/inativar-galeria/{id_galeria?}', [
				'uses' => 'Admin\GaleriaController@inativarGaleria'
		]);
	
		Route::any('/ativar-galeria/{id_galeria?}', [
				'uses' => 'Admin\GaleriaController@ativarGaleria'
		]);
	
		Route::any('/alterar-galeria/{id_galeria?}', [
				'as' => 'admin.galeria.alterar-galeria',
				'uses' => 'Admin\GaleriaController@getAlterarGaleria'
		]);
	
		Route::any('/altera-galeria', [
				'as' => 'admin.galeria.altera-galeria',
				'uses' => 'Admin\GaleriaController@alterarGaleria'
		]);
		
		//Listar VÍDEOS em DataTable
		Route::any('/lista-video.json', [
				'as' => 'admin.galeria.lista-video.json',
				'uses' => 'Admin\VideoController@getListaVideoJson'
		]);
		
		//INSERÇÃO DE VÍDEO
		Route::post('/inserir-video', [
				'uses' => 'Admin\VideoController@inserirVideo'
		]);
		
		Route::any('/excluir-video/{id_video?}', [
				'uses' => 'Admin\VideoController@excluirVideo'
		]);
		
		Route::any('/inativar-video/{id_video?}', [
				'uses' => 'Admin\VideoController@inativarVideo'
		]);
		
		Route::any('/ativar-video/{id_video?}', [
				'uses' => 'Admin\VideoController@ativarVideo'
		]);
		
		Route::any('/alterar-video/{id_video?}', [
				'as' => 'admin.galeria.alterar-video',
				'uses' => 'Admin\VideoController@getAlterarVideo'
		]);
		
		Route::any('/altera-video', [
				'as' => 'admin.galeria.altera-video',
				'uses' => 'Admin\VideoController@alterarVideo'
		]);
	});


	//ROTAS DA MISSÃO/VISÃO
	
	Route::any('/listaMissaoVisao', [
			'as' => 'admin.sobre-igreja.listaMissaoVisao',
			'uses' => 'Admin\SobreIgrejaController@getListaMissaoVisao'
	]);
	
Route::group(['prefix' => '/admin/sobre-igreja'], function () {
	
		//Listar em DataTable
	Route::any('/lista-missao-visao.json', [
			'as' => 'admin.sobre-igreja.lista-missao-visao.json',
			'uses' => 'Admin\SobreIgrejaController@getListaMisaoVisaoJson'
	]);
	
	Route::any('/inativar-sobre/{id_sobre?}', [
			'uses' => 'Admin\SobreIgrejaController@inativarSobre'
	]);
	
		Route::any('/ativar-sobre/{id_sobre?}', [
				'uses' => 'Admin\SobreIgrejaController@ativarSobre'
		]);
	
		Route::any('/alterar-sobre/{id_sobre?}', [
				'as' => 'admin.sobre-igreja.alterar-sobre',
				'uses' => 'Admin\SobreIgrejaController@getAlterarSobre'
		]);
	
		Route::any('/altera-sobre', [
				'as' => 'admin.sobre-igreja.altera-sobre',
				'uses' => 'Admin\SobreIgrejaController@alterarSobre'
		]);
	});
	
		//ROTAS DO DEVOCIONAL
		
Route::any('/listaDevocional', [
	'as' => 'admin.devocional.listaDevocional',
	'uses' => 'Admin\DevocionalController@getListaDevocional'
]);

Route::any('/inserirDevocional', [
		'as' => 'admin.devocional.inserirDevocional',
		'uses' => 'Admin\DevocionalController@getInserir'
]);
		
Route::group(['prefix' => '/admin/devocional'], function () {
		
	//Inserção
	Route::post('/inserir-devocional', [
			'uses' => 'Admin\DevocionalController@inserirDevocional'
	]);
	//Listar em DataTable
	Route::any('/lista-devocional.json', [
			'as' => 'admin.devocional.lista-devocional.json',
			'uses' => 'Admin\DevocionalController@getListaDevocionalJson'
	]);
		
	Route::any('/inativar-devocional/{id_devocional?}', [
			'uses' => 'Admin\DevocionalController@inativarDevocional'
	]);
		
	Route::any('/ativar-devocional/{id_devocional?}', [
			'uses' => 'Admin\DevocionalController@ativarDevocional'
	]);
		
	Route::any('/alterar-devocional/{id_devocional?}', [
			'as' => 'admin.devocional.alterar-devocional',
			'uses' => 'Admin\DevocionalController@getAlterarDevocional'
	]);
		
	Route::any('/altera-devocional', [
			'as' => 'admin.devocional.altera-devocional',
			'uses' => 'Admin\DevocionalController@alterarDevocional'
	]);
});

	//ROTAS DA PROGRAMAÇÃO
	
	Route::any('/listaProgramacao', [
			'as' => 'admin.programacao.listaProgramacao',
			'uses' => 'Admin\ProgramacaoController@getListaProgramacao'
	]);
	
	Route::any('/inserirProgramacao', [
			'as' => 'admin.programacao.inserirProgramacao',
			'uses' => 'Admin\ProgramacaoController@getInserir'
	]);
	
	Route::group(['prefix' => '/admin/programacao'], function () {
	
		//Inserção
		Route::post('/inserir-programacao', [
				'uses' => 'Admin\ProgramacaoController@inserirProgramacao'
		]);
		//Listar em DataTable
		Route::any('/lista-programacao.json', [
				'as' => 'admin.programacao.lista-programacao.json',
				'uses' => 'Admin\ProgramacaoController@getListaProgramacaoJson'
		]);
	
		Route::any('/inativar-programacao/{id_programacao?}', [
				'uses' => 'Admin\ProgramacaoController@inativarProgramacao'
		]);
	
		Route::any('/ativar-programacao/{id_programacao?}', [
				'uses' => 'Admin\ProgramacaoController@ativarProgramacao'
		]);
	
		Route::any('/alterar-programacao/{id_programacao?}', [
				'as' => 'admin.programacao.alterar-programacao',
				'uses' => 'Admin\ProgramacaoController@getAlterarProgramacao'
		]);
	
		Route::any('/altera-programacao', [
				'as' => 'admin.programacao.altera-programacao',
				'uses' => 'Admin\ProgramacaoController@alterarProgramacao'
		]);
		
		Route::any('/excluir-programacao/{id_programacao?}', [
				'uses' => 'Admin\ProgramacaoController@excluirProgramacao'
		]);
	});
	
		//ROTAS DOS PASTORES
		
		Route::any('/listaPastores', [
				'as' => 'admin.pastores.listaPastores',
				'uses' => 'Admin\PastoresController@getListaPastor'
		]);
		
		Route::any('/inserirPastores', [
				'as' => 'admin.pastores.inserirPastores',
				'uses' => 'Admin\PastoresController@getInserir'
		]);
		
		Route::group(['prefix' => '/admin/pastores'], function () {
		
			//Inserção
			Route::post('/inserir-pastores', [
					'uses' => 'Admin\PastoresController@inserirPastor'
			]);
			//Listar em DataTable
			Route::any('/lista-pastores.json', [
					'as' => 'admin.pastores.lista-pastores.json',
					'uses' => 'Admin\PastoresController@getListaPastorJson'
			]);
			Route::any('/inativar-pastores/{id_pastor?}', [
					'uses' => 'Admin\PastoresController@inativarPastor'
			]);
			
			Route::any('/ativar-pastores/{id_pastor?}', [
					'uses' => 'Admin\PastoresController@ativarPastor'
			]);
			
			Route::any('/alterar-pastores/{id_pastor?}', [
					'as' => 'admin.pastores.alterar-pastores',
					'uses' => 'Admin\PastoresController@getAlterarPastor'
			]);
			
			Route::any('/altera-pastores', [
					'as' => 'admin.pastores.altera-programacao',
					'uses' => 'Admin\PastoresController@alterarPastor'
			]);
			
			Route::any('/excluir-pastores/{id_pastor?}', [
					'uses' => 'Admin\PastoresController@excluirPastor'
			]);
		
			
		});
	
	//SETOR
	//Listar Setor em DataTable
	Route::any('/lista-setor.json', [
			'as' => 'admin.ctinf.lista-setor.json',
			'uses' => 'intranetAdmin\SetorController@getListaSetorJson'
	]);
	
	Route::any('/inserir-setor', [
			'uses' => 'intranetAdmin\SetorController@inserirSetor'
	]);
	
	Route::any('/excluir-setor/{id_setor?}', [
			'as' => 'admin.ctinf.excluir-setor',
			'uses' => 'intranetAdmin\SetorController@excluirSetor'
	]);
	
	Route::any('/inativar-setor/{id_setor?}', [
			'uses' => 'intranetAdmin\SetorController@inativarSetor'
	]);
	
	Route::any('/ativar-setor/{id_setor?}', [
			'uses' => 'intranetAdmin\SetorController@ativarSetor'
	]);
	
	Route::any('/altera-setor/{id_setor?}', [
			'as' => 'admin.ctinf.altera-setor',
			'uses' => 'intranetAdmin\SetorController@getAlterarSetor'
	]);
	
	Route::any('/alterar-setor', [
			'as' => 'admin.ctinf.alterar-setor',
			'uses' => 'intranetAdmin\SetorController@alterarSetor'
	]);
	



