<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Illuminate\Notifications\Notifiable;

class ta_menu extends Model
{
	use SoftDeletes;
	//use Notifiable;
	
    protected $table = 'ta_menu';
    protected $primaryKey = 'id_menu';

    protected $fillable = [];
    protected $hidden   = [];
    protected $softDelete = true;

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
    
    public function setores()
    {
    	return $this->hasMany('App\ta_setor', 'id_menu', 'id_menu');
    }
    
    //regras para validação de dados
    public $rules = [
    
    ];
    
    public $messages = [

    ];
    
    
    public function getMenu(){
    	return DB::table('ta_menu')
    	->whereNull('ta_menu.dhs_exclusao_logica')
        ->get();
    }
    

}