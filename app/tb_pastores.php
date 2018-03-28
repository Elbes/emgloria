<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Database\Eloquent\SoftDeletes;

class tb_pastores extends Model
{
use SoftDeletes;
	//use Notifiable;
	
    protected $table = 'tb_pastores';
    protected $primaryKey = 'id_pastor';

    protected $fillable = [];
    protected $hidden   = [];
    protected $softDelete = true;

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
    
    public function getDtPastores(){
    	$objReturn = DB::table('tb_pastores')
    	->get();

    	return DataTables::collection($objReturn)
        ->addColumn('dhs_cadastro', function($model){
    		return date('d/m/Y', strtotime($model->dhs_cadastro));
    	})
    	->addColumn('dhs_atualizacao', function($model){
    		return date('d/m/Y', strtotime($model->dhs_atualizacao));
    	})
    	->make(true);
    }
    
    
    public function getMinisteriosAtivos(){
    	return DB::table('tb_ministerio')
    	->whereNull('tb_ministerio.dhs_exclusao_logica')
    					->get();
    }
    
    public function getMinisterioId($id_ministerio){
    	return DB::table('tb_ministerio')->where('id_ministerio', $id_ministerio)
    	->whereNull('tb_ministerio.dhs_exclusao_logica') 
    	->get();
    }
    
    public function getMinisterioIdEx($id_ministerio){
    	return DB::table('tb_ministerio')->where('id_ministerio', $id_ministerio)->withTrashed()
    	->get();
    }
}
