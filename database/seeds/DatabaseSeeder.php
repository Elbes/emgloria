<?php
/*
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

 
    public function run()
    {       
            DB::table('ta_usuarios')->insert([
                'email' => 'elbes2009@gmail.com',
            	'matricula' => '1836889',
                'senha' => Hash::make('admin'),
                'nome'  => 'Administrador',
                'tipo'  => 'ctinf',
            	'status' => 'Ativo',
     ]);
    }
}
*/


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder {


	public function run()
	{
		//INSERÇÃO DE DADOS - TABELA TA_MENU
		DB::table('ta_menu')->insert([
		
				'nome_menu'  => 'Gabinete',
				'descricao_menu' => 'Menu com os setores ligados ao Gabinete',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_menu')->insert([
		
				'nome_menu'  => 'Subsecretarias',
				'descricao_menu' => 'Menu com os setores ligados às Subsecretarias',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_menu')->insert([
				'nome_menu'  => 'Superintendências',
				'descricao_menu' => 'Menu com os setores ligados às Superintendências',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_menu')->insert([
				'nome_menu'  => 'Unidades de Referência',
				'descricao_menu' => 'Menu com os setores ligados às Unidades de Referência',
				'dhs_cadastro' => Carbon::now()
		]);
		//FIM INSERÇÃO - TA_MENU
		
		//INSERÇÃO DE DADOS - TA_SETOR
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Coordenação Especial de Tecnoligia da Informação',
				'sigla_setor' => 'CTINF',
				'descricao_setor' => '',
				'id_menu'    => '1',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Assessoria de Comunicação',
				'sigla_setor' => 'ASCON',
				'descricao_setor' => '',
				'id_menu'    => '1',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Gabinete do Secretario',
				'sigla_setor' => 'GAB SEC',
				'descricao_setor' => '',
				'id_menu'    => '1',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Subsecretaria de Atenção Integral à Saúde',
				'sigla_setor' => 'SAIS',
				'descricao_setor' => '',
				'id_menu'    => '2',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Subsecretaria de Infraestrutura em Saúde',
				'sigla_setor' => 'SINFRA',
				'descricao_setor' => '',
				'id_menu'    => '2',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Subsecretaria de Administração Geral',
				'sigla_setor' => 'SUAG',
				'descricao_setor' => '',
				'id_menu'    => '2',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Subsecretaria de Gestão de Pessoas',
				'sigla_setor' => 'SUGEP',
				'descricao_setor' => '',
				'id_menu'    => '2',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Subsecretaria de Logistica em Saúde',
				'sigla_setor' => 'SULOG',
				'descricao_setor' => '',
				'id_menu'    => '2',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
		
				'nome_setor'  => 'Subsecretaria de Planejamento em Saúde',
				'sigla_setor' => 'SUPLANS',
				'descricao_setor' => '',
				'id_menu'    => '2',
				'dhs_cadastro' => Carbon::now()
		]);
		
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Região de Saúde Centro-Norte',
				'sigla_setor' => 'Centro-Norte',
				'descricao_setor' => 'Superintendência da Região de Saúde Centro-Norte: Asa Norte, Cruzeiro e Lago Norte',
				'id_menu'    => '3',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Região de Saúde Centro-Sul',
				'sigla_setor' => 'Centro-Sul',
				'descricao_setor' => 'Superintendência da Região de Saúde Centro-Sul: Asa Sul, Guará, Lago Sul, Candangolândia, Núcleo Bandeirante, Riacho Fundo I e II e ParkWay',
				'id_menu'    => '3',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Região de Saúde Norte',
				'sigla_setor' => 'Norte',
				'descricao_setor' => "Superintendência da Região de Saúde Norte: Planaltina, Sobradinho, Mestre D' Armas e Arapoanga",
				'id_menu'    => '3',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Região de Saúde Sul',
				'sigla_setor' => 'Sul',
				'descricao_setor' => 'Superintendência da Região de Saúde Sul: Gama e Santa Maria',
				'id_menu'    => '3',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Região de Saúde Leste',
				'sigla_setor' => 'Leste',
				'descricao_setor' => 'Superintendência da Região de Saúde Leste: Paranoá e São Sebastião',
				'id_menu'    => '3',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Região de Saúde Oeste',
				'sigla_setor' => 'Oeste',
				'descricao_setor' => 'Superintendência da Região de Saúde Oeste: Ceilândia e Brazlândia',
				'id_menu'    => '3',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Região de Saúde Sudoeste',
				'sigla_setor' => 'Sudeste',
				'descricao_setor' => 'Superintendência da Região de Saúde Sudoeste: Taguatinga, Samambaia e Recanto das Emas',
				'id_menu'    => '3',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Unidades de Referência Assistencial',
				'sigla_setor' => 'URA',
				'descricao_setor' => '',
				'id_menu'    => '4',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_setor')->insert([
				'nome_setor'  => 'Unidades de Referência Distrital',
				'sigla_setor' => 'URD',
				'descricao_setor' => '',
				'id_menu'    => '4',
				'dhs_cadastro' => Carbon::now()
		]);
		
		//FIM DA INSERÇÃO - TABELA TA_SETOR
		
		//CADSTRO DE USUÁRIO - ADMINISTRADOR DO SISTEMA
		DB::table('ta_usuarios')->insert([

				'nome'  => 'Administrador',
				'email' => 'elbes2009@gmail.com',
				'matricula' => '1836889',
				'senha' => Hash::make('admin'),
				'id_setor' => '1',
				'dhs_cadastro' => Carbon::now()
		]);
		
		//INSERÇÃO DE DADOS - TA_PAGINAS
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Coordenação Especial de TI',
				'id_setor' => '1',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Assessoria de Comunicação',
				'id_setor' => '2',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Gabinete do Secretario',
				'id_setor' => '3',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Subsecretaria de Atenção Integral à Saúde',
				'id_setor' => '4',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Subsecretaria de Infraestrutura em Saúde',
				'id_setor' => '5',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Subsecretaria de Administração Geral',
				'id_setor' => '6',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Subsecretaria de Gestão de Pessoas',
				'id_setor' => '7',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Subsecretaria de Logistica em Saúde',
				'id_setor' => '8',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Subsecretaria de Planejamento em Saúde',
				'id_setor' => '9',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Região de Saúde Centro-Norte',
				'id_setor' => '10',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Região de Saúde Centro-Sul',
				'id_setor' => '11',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Região de Saúde Norte',
				'id_setor' => '12',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Região de Saúde Sul',
				'id_setor' => '13',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Região de Saúde Leste',
				'id_setor' => '14',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Região de Saúde Oeste',
				'id_setor' => '15',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Região de Saúde Sudoeste',
				'id_setor' => '16',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Unidades de Referência Assistencial',
				'id_setor' => '17',
				'dhs_cadastro' => Carbon::now()
		]);
		
		DB::table('ta_paginas')->insert([
				'pagina_nome'  => 'Unidades de Referência Distrital',
				'id_setor' => '18',
				'dhs_cadastro' => Carbon::now()
		]);
	}
}