<?php

namespace App\Http\Controllers\Admin;

use App\tb_pedidos_oracao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PedidosOracaoController extends Controller
{
    
    public function enviaOracao(Request $request){
    	
    	$oracao = new tb_pedidos_oracao();
    	$oracao->nome_solicitante = $request->input('nome');
    	$oracao->telefone_solicitante = $request->input('telefone');
		$oracao->email_solicitante = $request->input('email');
		$oracao->oracao_pedido = $request->input('oracao_pedido');
         
		if ($oracao->save()) {
			$data = array (
				'nome_solicitante' => $request->input('nome'),
				'telefone_solicitante' => $request->input('telefone'),
				'email_solicitante' => $request->input('email'),
				'oracao_pedido' => $request->input('oracao_pedido'),
				'link' => 'www.emglora.com'
			);
			
			Mail::send ( 'email-envia-oracao', $data, function ($message) use ($data) {
				$message->to ('secretaria@emgloria.com', 'IBG - Igreja Batista em Glória' )->subject ( 'Pedido de Oração - EM GLÓRIA' );
							
    			if($message){
    						
    				/*Mail::send ( 'envia-email-automatico', $data, function ($message_automatica) use ($data) {
    					$email_solicitante = $request->input('email');
    					$message_automatica->to ($email_solicitante, 'IBG - Igreja Batista em Glória' )->subject ( 'Pedido de Oração - EM GLÓRIA' );
    					} );
                        */

    					Session::flash ( 'success', 'Pedido enviado com sucesso!!!' );
    			}else {
    					Session::flash ( 'error', 'Erro ao tentar enviar pedido! Tente Novamente.');
    				}
			} );
			     
		} else {
				Session::flash ( 'error', 'Erro ao tentar inserir o Pedido!!!Tente Novamente.');
		}

		return Redirect::to ( '/pedidos-oracao#ORAÇÃO' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListaPedido()
    {
        $usuario = \App\ta_usuarios::where('id_usuario', Auth::user()->id_usuario)->get();
        
        return view('admin.pedidos-oracao.listaPedidosOracao', compact('usuario'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_pedidos_oracao  $tb_pedidos_oracao
     * @return \Illuminate\Http\Response
     */
    public function getListaPedidosJson()
    {
        $pedidos = new \App\tb_pedidos_oracao();
        return $pedidos->getDtPedidosOracao();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_pedidos_oracao  $tb_pedidos_oracao
     * @return \Illuminate\Http\Response
     */
   //EXCLUIR PASTOR DEFINITIVAMENTE
    public function excluirPedidos($id_pedidos_oracao)
    {  
        $pedidos = \App\tb_pedidos_oracao::withTrashed()->find( $id_pedidos_oracao )->get()->first();
        if($pedidos->forceDelete()){
            Session::flash('success', 'Pedido excluído com sucesso!!!');
        }else{
            Session::flash('error', ' Erro ao tentar excluir !');
        }
        return Redirect::to('/listaPedidosOracao');
    }
}
