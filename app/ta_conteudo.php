<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Database\Eloquent\SoftDeletes;

class ta_conteudo extends Model
{
	use SoftDeletes;

    protected $table = 'ta_conteudo';
    protected $primaryKey = 'id_conteudo';

    protected $fillable = [ ];
    
    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
    const DELETED_AT = 'dhs_exclusao_logica';

    public function pagina()
    {
    	return $this->belongsTo('App\ta_paginas', 'id_pagina', 'id_pagina');
    }
    
    public function getConteudo($id_pagina){
    	$objReturn = DB::table('ta_conteudo')->where('id_pagina', $id_pagina)->orderBy('dhs_cadastro', 'desc')
    			->get();

    	return Datatables::collection($objReturn)
        ->addColumn('dhs_cadastro', function($model){
    		return date('d/m/Y H:i:s' , strtotime($model->dhs_cadastro));
    	})
    	->addColumn('dhs_atualizacao', function($model){
    		return date('d/m/Y H:i:s', strtotime($model->dhs_atualizacao));
    	})
    	->make(true);
    }
    
    public function getConteudoPagina($id_pagina){
    	return DB::table('ta_conteudo')->where('id_pagina', $id_pagina)
    	->get();
    }
    
    public function getConteudoId($id_conteudo){
    	return DB::table('ta_conteudo')->where('id_conteudo', $id_conteudo)
    	->get();
    }

}