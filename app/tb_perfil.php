<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Yajra\Datatables\Datatables;



class tb_perfil extends Model
{
    use SoftDeletes;
	use Notifiable;
	
    protected $table = 'tb_perfil';
    protected $primaryKey = 'id_perfil';

    protected $fillable = [];
    protected $hidden = [];
    protected $softDelete = true;

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
    
    public function usuarios()
    {
    	return $this->hasMany('App\tb_usuarios', 'id_perfil', 'id_perfil');
    }
    
    public function getTodosPerfis(){
    	return DB::table('tb_perfil')
    	->get();
    }
    
    public function getPerfilUsuario(){
    	return DB::table('tb_perfil')->with('usuarios')
    	->get();
    }
    
    public function getDtPerfil(){
    	$objReturn = DB::table('tb_perfil')
    	->get();
    
    	return DataTables::collection($objReturn)
    	->addColumn('dhs_cadastro', function($model){
    		return date('d/m/Y', strtotime($model->dhs_cadastro));
    	})
    	->make(true);
    }
    
}
