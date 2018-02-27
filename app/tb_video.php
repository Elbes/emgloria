<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Notifications\Notifiable;

class tb_video extends Model
{
	use SoftDeletes;
	//use Notifiable;
	
    protected $table = 'tb_video';
    protected $primaryKey = 'id_video';

    protected $fillable = [];
    protected $hidden   = [];
    protected $softDelete = true;

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
    
    public function getDtVideo(){
    	$objReturn = DB::table('tb_video')
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
    
    public function deleteVideo($id_video){
    	return DB::table('tb_video')
    	-> where('id_video',$id_video)
    	-> delete();
    }
    
    public function getTodosVideo(){
    	return DB::table('tb_video')
    	->whereNull('tb_video.dhs_exclusao_logica')
    		->get();
    }
    
    public function getVideoAeI($id_video){
    	return DB::table('tb_video')-> where('id_video',$id_video)
    	->get();
    }
    
    public function getVideoGeral(){
    	return DB::table('tb_video')
    	->whereNull('tb_video.dhs_exclusao_logica')->where('tb_video.tipo_video', 'Geral')
    	->get();
    }
    
    public function getVideoPrimeira(){
    	return DB::table('tb_video')
    	->whereNull('tb_video.dhs_exclusao_logica')->where('tb_video.tipo_video', 'Geral')
    	->get()->first();
    }
    
    public function getVideomor(){
    	return DB::table('tb_video')
    	->whereNull('tb_video.dhs_exclusa_logica')->where('tb_video.tipo_video', 'Amor que move')
    	->get();
    }
    
    public function getVideoAmorPrimeira(){
    	return DB::table('tb_video')
    	->whereNull('tb_video.dhs_exclusao_logica')->where('tb_video.tipo_video', 'Amor que move')
    	->get()->first();
    }
    
    public function getVideoGeralInicio(){
    	return DB::table('tb_video')
    	->whereNull('tb_video.dhs_exclusao_logica')->where('tb_video.tipo_video', 'Geral')
    	->limit(3)
    	->get();
    }

}