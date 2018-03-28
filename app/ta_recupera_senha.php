<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Facades\DataTables;

class ta_recupera_senha extends Model
{
	//use SoftDeletes;

    protected $table = 'ta_recupera_senha';
    protected $primaryKey = 'id_troca_sehna';

    protected $fillable = [];
    
    //const CREATED_AT = 'created_at';

    const CREATED_AT = 'dhs_cadastro';
    const UPDATED_AT = 'dhs_atualizacao';
  

}