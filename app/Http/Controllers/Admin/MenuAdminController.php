<?php

namespace App\Http\Controllers\intranetAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MenuAdminController extends Controller
{
  public function mostraMenuAdmin()
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	//$setor = $usuario->setor;
    	
    	return view('/menuAdmin',compact('usuario'));
    }
}
