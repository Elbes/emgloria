<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations;

class ta_paginas extends Model
{
	use SoftDeletes;

    protected $table = 'ta_paginas';
    protected $primaryKey = 'id_pagina';

    protected $fillable = [ ];
    
    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';
    
    public function subMenu()
    {
    	return $this->belongsTo('App\ta_submenu', 'id_submenu', 'id_submenu');
    }
    
    public function conteudo()
    {
    	return $this->hasMany('App\ta_conteudo', 'id_pagina', 'id_pagina');
    }
    
    public function setor()
    {
    	return $this->belongsTo('App\ta_setor', 'id_setor', 'id_setor');
    }
    
    public function getPagina(){
    	$objReturn = DB::table('ta_paginas')
    			->get();
    
    			return Datatables::of($objReturn)
    			->make(true);
    }
    
    public function getPaginaSetor($id_setor){
    	return DB::table('ta_paginas')->where('id_setor', $id_setor)
    	->get();
    }
    
    public function getConteudo(){
    	return DB::table('ta_paginas')
    	->get();
    }
    public function getTodasPaginas(){
    	return DB::table('ta_paginas')
    	->get();
    }
    
    public function getPaginasMenu($menu){
    	return DB::table('ta_paginas')->where('id_submenu', $menu)
    	->get();
    }
    
    public function getPaginaId($id_pagina){
    	return DB::table('ta_paginas')->where('id_pagina', $id_pagina)
    	->get();
    }
    

}