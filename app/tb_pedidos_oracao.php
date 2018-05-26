<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Database\Eloquent\SoftDeletes;

class tb_pedidos_oracao extends Model
{
	use SoftDeletes;
	//use Notifiable;
	
	protected $table = 'tb_pedidos_oracao';
	protected $primaryKey = 'id_pedidos_oracao';
	
	protected $fillable = [];
	protected $hidden   = [];
	protected $softDelete = true;
	
	const CREATED_AT = 'dhs_cadastro';
	const UPDATED_AT = 'dhs_atualizacao';
	const DELETED_AT = 'dhs_exclusao_logica';
	
	public function getDtPedidosOracao(){
		$objReturn = DB::table('tb_pedidos_oracao')
		->get();
	
		return DataTables::collection($objReturn)
		 
		->addColumn('dhs_acadastro', function($model){
			return date('d/m/Y', strtotime($model->dhs_cadastro));
		})
		->make(true);
	}
	
	public function getPedidosAtivos(){
		return DB::table('tb_pedidos_oracao')
		->whereNull('tb_pedidos_oracao.dhs_exclusao_logica')
		->get();
	}
}
