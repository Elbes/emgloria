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
    
    
    public function getPastoresAtivos(){
    	return DB::table('tb_pastores')
    	->whereNull('tb_pastores.dhs_exclusao_logica')
    					->get();
    }
    
    public function getPastoresId($id_pastor){
    	return DB::table('tb_pastores')->where('id_pastor', $id_pastor)
    	->whereNull('tb_pastores.dhs_exclusao_logica') 
    	->get();
    }
    
    public function getPastoresIdEx($id_pastor){
    	return DB::table('tb_pastores')->where('id_pastor', $id_pastor)->withTrashed()
    	->get();
    }
}
