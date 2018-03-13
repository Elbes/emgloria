<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Notifications\Notifiable;

class tb_galeria extends Model
{
	use SoftDeletes;
	//use Notifiable;
	
    protected $table = 'tb_galeria';
    protected $primaryKey = 'id_galeria';

    protected $fillable = [];
    protected $hidden   = [];
    protected $softDelete = true;

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
    
    public function getDtGaleria(){
    	$objReturn = DB::table('tb_galeria')
    	->get();

    	return Datatables::collection($objReturn)
        ->addColumn('dhs_cadastro', function($model){
    		return date('d/m/Y', strtotime($model->dhs_cadastro));
    	})
    	->addColumn('dhs_atualizacao', function($model){
    		return date('d/m/Y', strtotime($model->dhs_atualizacao));
    	})
    
    	->make(true);
    }
    
    public function deleteGaleria($id_galeria){
    	return DB::table('id_galeria')
    	-> where('id_galeria',$id_galeria)
    	-> delete();
    }
    
    public function getTodosGaleria(){
    	return DB::table('tb_galeria')
    	->whereNull('tb_galeria.dhs_exclusao_logica')
    		->get();
    }
    
    public function getGaleriaAeI($id_galeria){
    	return DB::table('tb_galeria')-> where('id_galeria',$id_galeria)
    	->get();
    }
    
    public function getGaleriaGeral(){
    	return DB::table('tb_galeria')
    	->whereNull('tb_galeria.dhs_exclusao_logica')->where('tb_galeria.tipo_imagem', 'Geral')
    	->get();
    }
    
    public function getGaleriaPrimeira(){
    	return DB::table('tb_galeria')
    	->whereNull('tb_galeria.dhs_exclusao_logica')->where('tb_galeria.tipo_imagem', 'Geral')
    	->get()->first();
    }
    
    public function getGaleriaAmor(){
    	return DB::table('tb_galeria')
    	->whereNull('tb_galeria.dhs_exclusao_logica')->where('tb_galeria.tipo_imagem', 'Amor que move')
    	->get();
    }
    
    public function getAmorPrimeira(){
    	return DB::table('tb_galeria')
    	->whereNull('tb_galeria.dhs_exclusao_logica')->where('tb_galeria.tipo_imagem', 'Amor que move')
    	->get()->first();
    }
    
    public function getGaleriaGeralInicio(){
    	return DB::table('tb_galeria')
    	->whereNull('tb_galeria.dhs_exclusao_logica')->where('tb_galeria.tipo_imagem', 'Geral')
    	->limit(6)
    	->get();
    }

}