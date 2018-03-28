<?php

namespace App\Http\Controllers\Admin;

use App\tb_pastores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PastoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListaPastor()
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
        return view('admin.pastores.listaPastores', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInserir()
    {
    	$usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
    	
    	return view('admin.pastores.inserirPastores', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getListaPastorJson()
    {
        $pastores = new \App\tb_pastores();
    	return $pastores->getDtPastores();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_pastores  $tb_pastores
     * @return \Illuminate\Http\Response
     */
    public function show(tb_pastores $tb_pastores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_pastores  $tb_pastores
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_pastores $tb_pastores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_pastores  $tb_pastores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_pastores $tb_pastores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_pastores  $tb_pastores
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_pastores $tb_pastores)
    {
        //
    }
}
