<?php

namespace App\Http\Controllers\Admin;

use App\tb_pedidos_oracao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PedidosOracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviaOracao(Request $request){
    	
    	$oracao = new tb_pedidos_oracao();
    	$oracao->nome_solicitante = $request->input('nome');
    	$oracao->telefone_solicitante = $request->input('telefone');
		$oracao->email_solicitante = $request->input('email');
		$oracao->oracao_pedido = $request->input('oracao_pedido');
         
		
		
		if ($oracao->save()) {
			$data = array (
				'nome_solicitante' => $request->input('nome'),
				'telefone_solicitante' => $request->input('email'),
				'email_solicitante' => $request->input('assunto'),
				'oracao_pedido' => $request->input('oracao_pedido'),
				'link' => 'www.emglora.com'
			);
			
				Mail::send ( 'email-envia-oracao', $data, function ($message) use ($data) {
					$message->to ('elbes2009@gmail.com', 'IBG - Igreja Batista em Glória' )->subject ( 'Pedido de Oração - EM GLÓRIA' );
							
					if($message){
						
						
						Mail::send ( 'email-envia-automatico', $data, function ($message_automatica) use ($data) {
							$email_solicitante = $request->input('email');
							$message_automatica->to ($email_solicitante, 'IBG - Igreja Batista em Glória' )->subject ( 'Pedido de Oração - EM GLÓRIA' );
						} );
						Session::flash ( 'success', 'Pedido enviado com sucesso!!!' );
					}else {
						Session::flash ( 'error', 'Erro ao tentar enviar pedido! Tente Novamente.');
					}
				} );
			     
			} else {
				Session::flash ( 'error', 'Erro ao tentar inserir o Pedido!!!Tente Novamente.');
			}

		return Redirect::to ( '/pedidos-oracao' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_pedidos_oracao  $tb_pedidos_oracao
     * @return \Illuminate\Http\Response
     */
    public function show(tb_pedidos_oracao $tb_pedidos_oracao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_pedidos_oracao  $tb_pedidos_oracao
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_pedidos_oracao $tb_pedidos_oracao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_pedidos_oracao  $tb_pedidos_oracao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_pedidos_oracao $tb_pedidos_oracao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_pedidos_oracao  $tb_pedidos_oracao
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_pedidos_oracao $tb_pedidos_oracao)
    {
        //
    }
}
