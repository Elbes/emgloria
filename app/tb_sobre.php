<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Notifications\Notifiable;

class tb_sobre extends Model
{
	use SoftDeletes;
	//use Notifiable;
	
    protected $table = 'tb_sobre';
    protected $primaryKey = 'id_sobre';

    protected $fillable = [];
    protected $hidden   = [];
    protected $softDelete = true;

    //const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
    
    public function getDtMissaoVisao(){
    	$objReturn = DB::table('tb_sobre')
    	->get();

    	return Datatables::collection($objReturn)
        	
    	->addColumn('dhs_atualizacao', function($model){
    		return date('d/m/Y', strtotime($model->dhs_atualizacao));
    	})
    	->make(true);
    }
    
    public function getMissaoVisaoAtivos(){
    	return DB::table('tb_sobre')
    	->whereNull('tb_sobre.dhs_exclusao_logica')
    	->get();
    }


}