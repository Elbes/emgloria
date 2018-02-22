<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class tb_usuarios extends Authenticatable 
{
	/** * Overrides the method to ignore the remember token. */
	public function setAttribute($key, $value)
	{ $isRememberTokenAttribute = $key == $this->getRememberTokenName();
		if (!$isRememberTokenAttribute)
		{
			parent::setAttribute($key, $value);
		} 
	}
	
	
	use SoftDeletes;
	use Notifiable;
	
    protected $table = 'tb_usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [];
    protected $hidden = array('senha', 'remember_token');
    protected $softDelete = true;

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
	
	public function perfil()
    {
    	return $this->belongsTo('App\tb_perfil', 'id_perfil', 'id_perfil');
    }
    
    //regras para validação de dados
 	public function rules()
    {
        return [
                'nova_senha'  =>  'required|min:6|confirmed',
                'confirme_senha'  =>  'required|min:6|confirmed',
        ];
    }
    
    public $messages = [
    ];
    
    //Retorna todos os usuários ativos  
    public function getTodosUsuarios(){
    	return DB::table('tb_usuarios')->whereNull('tb_usuarios.dhs_exclusao_logica') 
    					->get();
    }
    
    public function getUsuarioEmail($email){
    	return DB::table('tb_usuarios')->where('email', $email)
    	->get();
    }
    
    public function getUsuarioId($id_usuario){
    	return DB::table('tb_usuarios')->where('id_usuario', $id_usuario)
    	->get();
    }
    
    
    //Rerorna usuários ativos e inativos para Datatable
    public function getDtUsuario(){
    	$objReturn = $this::with('perfil')->withTrashed('dhs_exclusao_logica')->where('id_usuario','<>', Auth::user ()->id_usuario) 
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
    
    
}