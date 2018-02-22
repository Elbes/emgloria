<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class HomeAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	/*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	
    	$usuario = \App\tb_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	//$setor = $usuario->setor;
    	
        return view('/admin/homeAdmin', compact('usuario'));
    }
}
