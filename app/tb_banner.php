<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Notifications\Notifiable;

class tb_banner extends Model
{
	use SoftDeletes;
	//use Notifiable;
	
    protected $table = 'tb_banner';
    protected $primaryKey = 'id_banner';

    protected $fillable = [];
    protected $hidden   = [];
    protected $softDelete = true;

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';

    //regras para validaÃ§Ã£o de dados
    public $rules = [
    		'banner_nome' => 'required|string|max:100',
    		'imagen_banner' => 'required|file|mimes:jpeg,bmp,png',
    		'validade' => 'numeric',
    		
    ];
    
    public $messages = [
    		'banner_nome.required'   => 'O campo Nome do Banner é obrigatório.',
    		'banner_nome.max'        => 'O campo nome do banner não pode ser superior a 100 caracteres..',
    		'imagen_banner.required' => 'Obrigatório carregar uma imagem.',
    		'iamgen_banner.mimes'    => 'O arquivo em anexo deve ser uma imagem!!!',
    		'validade.numeric'       => 'O campo Validade deve ser numérico.',
    ];
    
    public function getDtBanner(){
    	$objReturn = DB::table('tb_banner')
    	->get();

    	return DataTables::collection($objReturn)
        ->addColumn('dhs_cadastro', function($model){
    		return date('d/m/Y', strtotime($model->dhs_cadastro));
    	})
    	->addColumn('dhs_atualizacao', function($model){
    		return date('d/m/Y', strtotime($model->dhs_atualizacao));
    	})
    	->addColumn('validade', function($model){
    		return date('d/m/Y', strtotime($model->validade));
    	})
    	->make(true);
    }
    
    public function deleteBanner($id_banner){
    	return DB::table('tb_banner')
    	-> where('id_banner',$id_banner)
    	-> delete();
    }
    
    public function getTodosBanners(){
    	return DB::table('tb_banner')
    	->orderBy('prioridade', 'asc')
    	->orderBy('dhs_cadastro', 'desc')
    	->whereNull('tb_banner.dhs_exclusao_logica')
    	->whereDate('validade', '>=', date('Y-m-d'))
    					->get();
    }
    
    public function getBannersAeI($id_banner){
    	return DB::table('tb_banner')-> where('id_banner',$id_banner)
    	->get();
    }

}