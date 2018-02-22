<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Notifications\Notifiable;

class tb_devocional extends Model
{
	use SoftDeletes;
	//use Notifiable;
	
    protected $table = 'tb_devocional';
    protected $primaryKey = 'id_devocional';

    protected $fillable = [];
    protected $hidden   = [];
    protected $softDelete = true;

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
    
    public function getDtDevocional(){
    	$objReturn = DB::table('tb_devocional')
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
    
    public function getDevocionalAtivos(){
    	return DB::table('tb_devocional')
    	->whereNull('tb_devocional.dhs_exclusao_logica')
    	->get();
    }
    
    public function getDevocionalId($id_devocional){
    	return DB::table('tb_devocional')->where('id_devocional', $id_devocional)
    	->whereNull('tb_devocional.dhs_exclusao_logica')
    	->get();
    }

}