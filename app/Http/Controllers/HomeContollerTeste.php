<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class HomeControllerTeste extends Controller {
 
    public function getIndex()
    {
        return view('admin.login');
    }
 
    public function getLogin()
    {
        $titulo = 'Entrar - Desenvolvendo com Laravel';
        return View::make('admin.login', compact('titulo'));
    }
    
    public function getEntrar(Request $request, $email, $senha){
    	$usuario = \App\ta_usuarios::where('email', $email)
    	->first();
    	
    	if (Hash::check($senha, $usuario->senha))
    	{
    		Auth::loginUsingId($usuario->id_usuario);
    		return redirect()->route('/admin');
    	}
    }
 
    public function postLogin()
    {
        // Opção de lembrar do usuário
        $remember = false;
        if(Input::get('remember'))
        {
            $remember = true;
        }
        
        // Autenticação
        if (Auth::attempt(array(
            'email' => Input::get('email'), 
            'password' => Input::get('senha')
            ), $remember))
        {
            return Redirect::to('admin.ctinf.inserirLink');
        }
        else
        {
            return Redirect::to('login')
                ->with('flash_error', 1)
                ->withInput();
        }
    }
    
    public function getSair()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}